<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TourMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

            public  $name="name ";
            public  $email="email";
            public  $country ="country";
            public  $hotel="hotel";
            public  $checkin="checkin";
            public  $checkout="checkout";
            public  $comfort="comfort";
            public  $adults="adults";
            public  $childrens="childrens";
            public  $room="room";
            public  $message="message";
    public function __construct($name,$email,$country,$hotel,$checkin,$checkout,$comfort,$adults,$childrens,$room,$message)
    {
        //
        
        $this-> name = $name;
        $this-> email = $email;
        $this-> country = $country;
        $this-> hotel = $hotel;
        $this-> checkin = $checkin;
        $this-> checkout = $checkout;
        $this-> comfort = $comfort;
        $this-> adults = $adults;
        $this-> childrens = $childrens;
        $this-> room = $room;
        $this-> message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

      $name="name ";
         $email="email";
         $country ="country";
         $hotel="hotel";
         $checkin="checkin";
         $checkout="checkout";
         $comfort="comfort";
         $adults="adults";
         $childrens="childrens";
         $room="room";
         $message="message";

        return $this->view('Dashboard.mail.tourmail',compact('name','email','country','hotel','checkin','checkout','comfort','adults','childrens','room','message',));
    }
}
