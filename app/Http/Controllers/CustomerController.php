<?php

namespace App\Http\Controllers;
use  Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
        if(request()->has('query') && request()->filled('query')){
            $customers = Customer::where('first_name','like','%'.request('query').'%')
            ->orWhere('last_name','like','%'.request('query').'%')
            ->orWhere('id_card','like','%'.request('query').'%')
            ->orWhere('address','like','%'.request('query').'%')
            ->orWhere('telephone','like','%'.request('query').'%')
            ->orWhere('e_mail','like','%'.request('query').'%')
            ->orWhere('status',request('query'))
            ->get();
           }else {
            $customers = Customer::all();
           }
    
            return view('customer-index',compact('customers'));
    }

    public function create(){
        return view('customer-create');
    }

    public function store(){

        $path = request()->file('document')->store('documents','public');
        
        Customer::create([
            'first_name' => request()->fname,
            'last_name' => request()->lname,
            'id_card' => request()->idcard,
            'address' => request()->address,
            'telephone' => request()->tel,
            'e_mail' => request()->email,
            'document' => $path,
            'status'=>'Currently'
        ]);

        return redirect('/customer/index');
    }

    public function edit(Customer $customer){
        return view('customer-edit',compact('customer'));   
    }

    public function update(Request $request, Customer $customer){

        $path = null;

        if(request()->hasFile('document')){
            $path = request()->file('document')->store('documents','public');
            
            $customer->update([
                'first_name' => request()->fname,
                'last_name' => request()->lname,
                'id_card' => request()->idcard,
                'address' => request()->address,
                'telephone' => request()->tel,
                'e_mail' => request()->email,
                'document' => $path,
                'status'=>request()->status,
            ]);
        }else {
            $customer->update([
                'first_name' => request()->fname,
                'last_name' => request()->lname,
                'id_card' => request()->idcard,
                'address' => request()->address,
                'telephone' => request()->tel,
                'e_mail' => request()->email,
                'status'=>request()->status,
            ]);
        }


       
        return redirect('/customer/index');
    }

    public function delete(Customer $customer){
        $customer->delete();
        return redirect('/customer/index');
        
    }

    public function pdf(){
        $customers = Customer::all();
        $pdf = PDF::loadView('customer-pdf',compact('customers'));
        $pdf->setPaper('A4', 'landscape');
        return $pdf->download('customer.pdf');
    }

}
