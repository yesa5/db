<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }
    public function user_form($id){
        return view('user_form',['id'=>$id]);
    }
    public function list(Request $request){
        if ($request['type']!=null ) {
            $rooms = DB::table('rooms')->where('status','free')->where('type', $request['type'])->get();
            if ($request['rooms']!=null){
                $room = $request['rooms'];
                $a = str_split($room);
                $rooms = DB::table('rooms')->where('status','free')->where('type', $request['type'])->whereBetween('rooms',array($a[0],$a[1]))->get();
                if ($request['beds']!=null){
                    $bed = $request['beds'];
                    $b = str_split($bed);
                    $rooms = DB::table('rooms')->where('status','free')->where('type', $request['type'])->whereBetween('rooms',array($a[0],$a[1]))->whereBetween('beds',array($b[0],$b[1]))->get();
                }
            }
        }
        return view('list',['rooms'=>$rooms]);
    }



    public function processAddBooking(Request $request){
        $guest = DB::table('guests')->insertGetId(
            [  'name' => $request['name'], 'surname' => $request['surname'], 'phone' => $request['phone'] ]
        );
        $booking = DB::table('bookings')->insertGetId(
            [   'guest_id' => $guest,
                'date_in' => $request['in'],
                'date_out' => $request['out']
            ]
        );
       DB::table('reservedrooms')->insert([
           'book_id' => $booking,
            'room_id' => $request['room']
        ]);
        return redirect()->route('index');
    }
}
