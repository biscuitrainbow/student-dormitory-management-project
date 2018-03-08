<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function index(){
        $rooms = Room::with('maintenances')->get();
        return view('room-index',compact('rooms'));
    }

    public function create(){
        return view('room-create');
    }

    public function store(){
        Room::create([
            'building' => request()->build,
            'number' => request()->number,
            'status'=>'empty'
        ]);

        return redirect('/room/index');
    }

    public function delete(Room $room){
        $room->delete();
        return redirect('/room/index');
        
    }

    public function edit(Room $room){
        return view('room-edit',compact('room'));   
    }

    public function update(Room $room){
        $room->update([
            'building' => request()->build,
            'number' => request()->number,
            'status'=>request()->status,
        ]);
        return redirect('/room/index');
    }
}

