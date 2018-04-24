<?php

namespace App\Http\Controllers;
use  Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    public function index(){
       if(request()->has('query') && request()->filled('query')){
        $rooms = Room::where('building',request('query'))
        ->orWhere('number',request('query'))
        ->orWhere('furniture','like','%'.request('query').'%')
        ->orWhere('status',request('query'))
        ->get();
       }else {
        $rooms = Room::all();
       }

        return view('room-index',compact('rooms'));
    }

    public function create(){
        return view('room-create');
    }

    public function store(){

        $path = request()->file('document')->store('documents','public');

        Room::create([
            'building' => request()->build,
            'number' => request()->number,
            'furniture'=>'เตียง,ตู้เสื้อผ้า,โต๊ะเครื่องแป้ง,เครื่องทำน้ำอุ่น,พัดลม,เครื่องปรับอากาศ',
            'document' => $path,
            'status'=>'ว่าง'
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
        $path = null;
        if(request()->hasFile('document')){
            $path = request()->file('document')->store('documents','public');
            
        $room->update([
            'building' => request()->build,
            'number' => request()->number,
            'furniture' => request()->furniture,
            'document' => $path,
            'status'=>request()->status,
        ]);
    }else {
        $room->update([
            'building' => request()->build,
            'number' => request()->number,
            'furniture' => request()->furniture,
            'status'=>request()->status,
            ]);
        }
        return redirect('/room/index');
    }


    public function pdf(){
        $rooms = Room::all();

        $pdf = PDF::loadView('room-pdf',compact('rooms'));
        return $pdf->download('room.pdf');
    }

}

