<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Maintenance extends Model
{
    protected $guarded=[];

    protected $dates = ['created_at', 'updated_at'];


    public function room(){
        return $this->belongsTo(Room::class,'room_id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

}
