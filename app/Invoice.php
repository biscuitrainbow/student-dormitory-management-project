<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $guarded=[];

    public function room(){
        return $this->belongsTo(Room::class,'room_id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }
}
