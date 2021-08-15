<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TourMail;
use App\Models\Booking;
use Carbon\Carbon;
class DashboardController extends Controller
{
    //
    function index(){

      return view('dashboard.index');
    }

    function hot_tour(){

      return view('dashboard.hot_tour');
    }

    function special_offer(){

      return view('dashboard.special_offer');
    }

    function blog(){

      return view('dashboard.blog');
    }

    function contact(){

      return view('dashboard.contact');
    }


    function booking(Request $request){
        $request->validate([
          'name'          =>'required',
          'email'                =>'required',
          'country'          =>'required',
          'hotel'           =>'required',
          'checkin'            =>'required',
          'checkout'            =>'required',
          'comfort'            =>'required',
          'adults'            =>'required',
          'childrens'            =>'required',
          'room'            =>'required',
          'message'            =>'required',


    ]); //echo "string";
        $last_inserted_id = Booking::insertGetId([

          'name'                  =>$request->name,
          'email'                 =>$request->email,
          'country'               =>$request->country,
          'hotel'                 =>$request->hotel,
          'checkin'               =>$request->checkin,
          'checkout'              =>$request->checkout,
          'comfort'               =>$request->comfort,
          'adults'                =>$request->adults,
          'childrens'             =>$request->childrens,
          'room'                  =>$request->room,
          'message'               =>$request->message,

          'created_at'            =>Carbon::now()

        ]);
        $name = $request->name;
        $email = $request->email;
        $country = $request->country;
        $hotel = $request->hotel;
        $checkin = $request->checkin;
        $checkout = $request->checkout;
        $comfort = $request->comfort;
        $adults = $request->adults;
        $childrens = $request->childrens;
        $room = $request->room;
        $message = $request->message;

        Mail::to('sa27289@gmail.com')->send(new TourMail($name,$email,$country,$hotel,$checkin,$checkout,$comfort,$adults,$childrens,$room,$message));
        return back();
      }
}
