<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintenance;

class MaintenanceController extends Controller
{
    public function index(){
        $maintenances = Maintenance::with('room')->get();

        
        
        return view('maintenance-index',compact('maintenances'));
    }
}
