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
         $available_number = Room::where('status','ว่าง')->count();
         $customer_number = Customer::where('status','อยู่ในระบบ')->count();
         $maintenance_number = Maintenance::where('status','รอดำเนินการ')->count();
         $invoice_number = Invoice::where('status','ค้างชำระ')->count();
         

         $rooms = Room::where('status','ว่าง')->get();
         $maintenances = Maintenance::where('status','รอดำเนินการ')->get();
         $invoices = Invoice::where('status','ค้างชำระ')->get();

        
         $contracts = Contract::with('room','customer')->get();
        
        return view('dashboard',compact('available_number','customer_number','invoice_number','maintenance_number','rooms','maintenances','invoices'));
    }
}
