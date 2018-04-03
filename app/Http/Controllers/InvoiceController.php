<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Room;
use App\Customer;
use Illuminate\Http\Request;
use  Barryvdh\DomPDF\Facade as PDF;
class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index(){
             if(request()->has('query') && request()->filled('query')){
                
                $invoices = Invoice::whereHas('room',function($query){
                    $query->where('building',request('query'));
                })
                ->orWhereHas('room',function($query){
                    $query->where('number',request('query'));
                })
                ->orWhereHas('customer',function($query){
                    $query->where('first_name','like','%'.request('query').'%');
                })
                ->orWhereHas('customer',function($query){
                    $query->where('last_name','like','%'.request('query').'%');
                })
                
                ->orWhere('status',request('query'))
                ->get();
    }else {
        $invoices = Invoice::with('room','customer')->get();
       }

       return view('invoice-index',compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rooms = Room::all();
        $customers = Customer::all();
        return view('invoice-create',compact('rooms','customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $water = request()->water_unit - request()->lastw;
        $electricity = request()->electricity_unit - request()->laste;
        $total = request()->room_price + $water*17 + $electricity*8 +  request()->internet;

        Invoice::create([
            'room_price' => request()->room_price,
            'last_water_unit' => request()->lastw,
            'water_unit' => request()->water_unit,
            'last_electricity_unit' => request()->laste,
            'electricity_unit'=>request()->electricity_unit,
            'internet_price'=>request()->internet,
            'total' => $total,
            'status'=>'ค้างชำระ',
            'room_id'=>request()->room,
            'customer_id'=>request()->customer,    
        ]);

        return redirect('/invoices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        $rooms = Room::all();
        $customers = Customer::all();
        return view('invoice-edit',compact('rooms','customers','invoice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {

        $water = request()->water_unit - request()->lastw;
        $electricity = request()->electricity_unit - request()->laste;
        $total = request()->room_price + $water*17 + $electricity*8 +  request()->internet;
     
     $invoice->update([
        'room_price' => request()->room_price,
        'last_water_unit' => request()->lastw,
        'water_unit' => request()->water_unit,
        'last_electricity_unit' => request()->laste,
        'electricity_unit'=>request()->electricity_unit,
        'internet_price'=>request()->internet,
        'total' => $total,
        'status'=>request()->status,
        'room_id'=>request()->room,
        'customer_id'=>request()->customer,       
        ]);

        return redirect('/invoices');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        $invoice->delete();
        return redirect('/invoices');

    }

    public function pdf(Invoice $invoice){
        //return view('invoice-pdf',compact('invoice'));

        $pdf = PDF::loadView('invoice-pdf',compact('invoice'));
        return $pdf->download('invoice.pdf');
    }
}
