<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Maintenance;
use App\Room;


class MaintenanceController extends Controller
{
    public function index()
    {
        if (request()->has('query') && request()->filled('query')) {


            $maintenances = Maintenance

                ::whereHas('room', function ($query) {
                    $query->where('building', 'like', '%' . request('query') . '%');
                })

                ->orWhereHas('room', function ($query) {
                    $query->where('number', request('query'));
                })

                ->orWhere('name', 'like', '%' . request('query') . '%')
                // ->orWhere('created_at', '2018-04-03 09:19:20')
                ->orWhere('status', request('query'))

                ->get();
        } else {
            $maintenances = Maintenance::with('room')->get();
        }

        return view('maintenance-index', compact('maintenances'));
    }

    public function create()
    {
        $rooms = Room::all();
        return view('maintenance-create', compact('rooms'));
    }

    public function store()
    {
        Maintenance::create([
            'name' => request()->name,
            'phone' => request()->phone,
            'status' => 'รอดำเนินการ',
            'room_id' => request()->room,
            

        ]);

        return redirect('/maintenance/index');
    }

    public function edit(maintenance $maintenance)
    {
        $rooms = Room::all();
        
        return view('maintenance-edit', compact('rooms', 'maintenance'));
    }

    public function update(Request $request, maintenance $maintenance)
    {
        $maintenance->update([
            'name' => request()->name,
            'phone' => request()->phone,
            'status' => request()->status,
            'room_id' => request()->room,
            
        ]);

        return redirect('/maintenance/index');
    }

    public function delete(maintenance $maintenance)
    {
        $maintenance->delete();
        return redirect('/maintenance/index');

    }

    public function pdf()
    {
        $maintenances = Maintenance::all();
        $pdf = PDF::loadView('maintenance-pdf', compact('maintenances'));
        return $pdf->download('maintenance.pdf');
    }

}
