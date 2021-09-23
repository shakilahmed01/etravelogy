<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\TourMail;
use App\Models\Booking;
use App\Models\Ticket;
use App\Models\Hotel_Book;
use App\Models\Hotel_details;
use Carbon\Carbon;
class DashboardController extends Controller
{
    //
    function indexv1(){

      $t=Ticket::all();

      return view('dashboard.indexv1',compact('t'));
    }

    function flight(){

      return view('dashboard.flight');
    }
    function hotel(){

      return view('dashboard.hotel');
    }
    function bus(){

      return view('dashboard.bus');
    }
    function tour(){

      return view('dashboard.tour');
    }
    function visa(){

      return view('dashboard.visa');
    }
    function details($id){
      $single_ticket= Ticket:: findOrFail($id);

      return view('dashboard.ticket_details',compact('single_ticket'));
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
          return redirect('/hotel/book');
      }



      public function search(Request $request){
  // Get the search value from the request
          $search = $request->input('destination');

          // Search in the title and body columns from the posts table
          $t = Ticket::query()
              ->where('destination', 'LIKE', "%{$search}%")

              ->get();

          // Return the search view with the resluts compacted

          return view('dashboard.ticket_search', compact('t'));
      }


      function view_booking(){

   $lists =Booking::latest()->simplePaginate(1);
   $k = Booking::all();
   return view('dashboard.view_booking',compact('k','lists'));
 }


 //add hotel
 function addhotel(){

   return view('dashboard.addhotel');
 }

 //hotel details search
 public function hotel_search(Request $request){
// Get the search value from the request
      $room_type = $request->input('room_type');
      $adult = $request->input('adult');


     // Search in the title and body columns from the posts table
     $t = Ticket::query()
          ->where('room_type', 'LIKE', "%{$room_type}%")
          ->where('adult', 'LIKE', "%{$adult}%")

         ->get();


     // Return the search view with the resluts compacted

     return view('dashboard.hotel_details', compact('t'));
 }
}
