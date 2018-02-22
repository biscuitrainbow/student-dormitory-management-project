<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded=[];

    public function maintenances(){
        return $this->hasMany(Maintenance::class,'room_id');
    }
}
