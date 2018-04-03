<?php

namespace App\Http\Controllers;
use  Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Contract;
use App\Room;
use App\Customer;
class ContractController extends Controller
{
    public function index(){
        if(request()->has('query') && request()->filled('query')){
            
            $contracts = Contract::whereHas('customer',function($query){
                $query->where('first_name','like','%'.request('query').'%');
            })

            ->orWhereHas('customer',function($query){
                $query->where('last_name','like','%'.request('query').'%');
            })
            ->orWhereHas('room',function($query){
                $query->where('building',request('query'));
            })
            ->orWhereHas('room',function($query){
                $query->where('number',request('query'));
            })
            ->orWhere('start','like','%'.request('query').'%')
            ->orWhere('end','like','%'.request('query').'%')
            ->orWhere('witness_name','like','%'.request('query').'%')
            ->orWhere('status',request('query'))
            ->get();
           }else {
            $contracts = Contract::with('room','customer')->get();
           }
    
           return view('contract-index',compact('contracts'));
        }

    public function create(){
        $rooms = Room::all();
        $customers = Customer::all();
        return view('contract-create',compact('rooms','customers'));
    }

    public function store(){
        $path = request()->file('document')->store('documents','public');
        Contract::create([
            'earnest_money' => request()->earnest,
            'insurer_money' => request()->insurer,
            'start' => request()->start,
            'end' => request()->end,
            'witness_name' => request()->witness,
            'document' => $path,
            'status'=>'มีสัญญา',
            'room_id'=>request()->room,
            'customer_id'=>request()->customer,  
        
        ]);
        return redirect('/contract/index');
    }

    public function edit(contract $contract)
    {
        $rooms = Room::all();
        $customers = Customer::all();
        return view('contract-edit',compact('rooms','customers','contract'));
    }

    public function update(Request $request, Contract $contract)
    {

        $path = null;
        if(request()->hasFile('document')){
            $path = request()->file('document')->store('documents','public');
        
            $contract->update([
            'earnest_money' => request()->earnest,
            'insurer_money' => request()->insurer,
            'start'=>request()->start,
            'end'=>request()->end,
            'document' => $path,
            'status'=>request()->status,
            'witness_name' =>request()->witness,
            'room_id'=>request()->room,
            'customer_id'=>request()->customer,    
        ]);
    }else {
             $contract->update([
            'earnest_money' => request()->earnest,
            'insurer_money' => request()->insurer,
            'start'=>request()->start,
            'end'=>request()->end,
            'status'=>request()->status,
            'witness_name' =>request()->witness,
            'room_id'=>request()->room,
            'customer_id'=>request()->customer,
            ]);
             }   

        return redirect('/contract/index');
    }

    public function delete(Contract $contract){
        $contract->delete();
        return redirect('/contract/index');
        
    }

    public function pdf(){
        $contracts =  Contract::with('room','customer')->get();
        $pdf = PDF::loadView('contract-pdf',compact('contracts'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('contract.pdf');
    }

    

}
