<?php

namespace App\Http\Controllers;
use  Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Maintenance;
use App\Room;
use App\Customer;

class MaintenanceController extends Controller
{
    public function index(){
            if(request()->has('query') && request()->filled('query')){
                
                $maintenances = Maintenance::whereHas('customer',function($query){
                    $query->where('telephone','like','%'.request('query').'%');
                })

                ->orWhereHas('room',function($query){
                    $query->where('building',request('query'));
                })
                ->orWhereHas('room',function($query){
                    $query->where('number',request('query'));
                })
                ->orWhere('name','like','%'.request('query').'%')
                ->orWhere('created_at',request('query'))
                ->orWhere('status',request('query'))
                ->get();
    }else {
        $maintenances = Maintenance::with('room','customer')->get();
       }

       return view('maintenance-index',compact('maintenances'));
    }

    public function create(){
        $rooms = Room::all();
        $customers = Customer::all();
        return view('maintenance-create',compact('rooms','customers'));
    }

    public function store(){
        Maintenance::create([
            'name' => request()->name,
            'status'=>'รอดำเนินการ',
            'room_id'=>request()->room,
            'customer_id'=>request()->customer,  
        
        ]);

        return redirect('/maintenance/index');
    }

    public function edit(maintenance $maintenance)
    {
        $rooms = Room::all();
        $customers = Customer::all();
        return view('maintenance-edit',compact('rooms','customers','maintenance'));
    }

    public function update(Request $request, maintenance $maintenance)
    {
     $maintenance->update([
            'name' => request()->name,
            'status'=>request()->status,
            'room_id'=>request()->room,
            'customer_id'=>request()->customer,    
        ]);

        return redirect('/maintenance/index');
    }

    public function delete(maintenance $maintenance){
        $maintenance->delete();
        return redirect('/maintenance/index');
        
    }

    public function pdf(){
        $maintenances = Maintenance::all();
        $pdf = PDF::loadView('maintenance-pdf',compact('maintenances'));
        return $pdf->download('maintenance.pdf');
    }

}
