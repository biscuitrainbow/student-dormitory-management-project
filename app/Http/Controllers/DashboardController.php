<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Customer;
use App\Maintenance;
use App\Contract;
use App\Invoice;

class DashboardController extends Controller
{
    public function index(){
         $available_number = Room::where('status','Available')->count();
         $customer_number = Customer::where('status','Currently')->count();
         $maintenance_number = Maintenance::where('status','Not finished')->count();
         $invoice_number = Invoice::where('status','unpaid')->count();
         

         $rooms = Room::where('status','Available')->get();
         $customers = Customer::where('status','Currently')->get();
         $maintenances = Maintenance::where('status','Not finished')->get();
         $invoices = Invoice::where('status','unpaid')->get();

        
         $contracts = Contract::with('room','customer')->get();
        
        return view('dashboard',compact('available_number','customer_number','invoice_number','maintenance_number','rooms','customers','maintenances','invoices'));
    }
}
