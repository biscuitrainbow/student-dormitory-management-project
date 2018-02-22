<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintenance;

class MaintenanceController extends Controller
{
    public function index(){
        $maintenances = Maintenance::items();

        
        
        return view('maintenance-index',compact('maintenances'));
    }
}
