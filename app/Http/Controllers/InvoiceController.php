<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Room;
use App\Customer;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
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
        $total = request()->price + request()->water_unit + request()->electricity_unit +  request()->internet;
        Invoice::create([
            'price' => request()->price,
            'water_unit' => request()->water_unit,
            'electricity_unit'=>request()->electricity_unit,
            'internet'=>request()->internet,
            'total' => $total,
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
        $total = request()->price + request()->water_unit + request()->electricity_unit +  request()->internet;
        $invoice->update([
            'price' => request()->price,
            'water_unit' => request()->water_unit,
            'electricity_unit'=>request()->electricity_unit,
            'internet'=>request()->internet,
            'total' => $total,
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
}
