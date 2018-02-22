<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Maintenance extends Model
{
    protected $guarded=[];

    public static function items()
    {
        $return = DB::table('maintenances as m')
        ->select('*')
        ->addselect('r.number as room_number')       
        ->join('rooms as r', 'm.room_id', '=', 'r.id')
        
         ->get();

        // dd($return);

        return $return;
    }

}
