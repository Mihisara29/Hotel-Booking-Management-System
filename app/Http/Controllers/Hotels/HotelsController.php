<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment\Apartment;

class HotelsController extends Controller
{

    public function rooms($id){

        $getRooms = Apartment::select()->orderBy('id','desc')->take(6)->where('hotel_id', $id)->get();

        return view('hotels.rooms', compact('getRooms'));

    }

        public function roomDetails($id){

        $getRoom = Apartment::find($id);

        return view('hotels.roomdetails', compact('getRoom'));

    }

    public function roomBooking(Request $request, $id){

      if($data("Y/m/d") < $request->check_in AND $data("Y/m/d") < $request->check_out){

            //continue with logic

      } else {
        echo "Choose dates in the future, invalid check in or check out date";
      }

    }

}
