<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Ticket;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'coxs bazar',
          'hotel_name' =>'royal blue',
          'room'       =>1,
          'room_type'       =>'Single',
          'adult'      =>2,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'staying_time' =>'24hrs',
          'price'      =>2334,
        ]);

        //1.1

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Borishal',
          'hotel_name' =>'sea shell',
          'room'       =>1,
          'room_type'       =>'Super Delax',
          'adult'      =>2,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'staying_time' =>'24hrs',
          'price'      =>2334,
        ]);

        //1.2

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Jossor',
          'hotel_name' =>'Rose valley',
          'room'       =>1,
          'room_type'       =>'Single',
          'adult'      =>2,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'staying_time' =>'24hrs',
          'price'      =>2334,
        ]);

        //2

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'sylhet',
          'hotel_name' =>'Rose valley',
          'room'       =>1,
          'room_type'       =>'Single',
          'adult'      =>2,
          'children'   =>1,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'staying_time' =>'24hrs',
          'price'      =>2334,
        ]);

        //2.1

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Khulna',
          'hotel_name' =>'Falcon',
          'room'       =>1,
          'room_type'       =>'Single',
          'adult'      =>2,
          'children'   =>1,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'staying_time' =>'24hrs',
          'price'      =>2334,
        ]);

        //2.2

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Chittagong',
          'hotel_name' =>'Red valvet',
          'room'       =>1,
          'room_type'       =>'Single',
          'adult'      =>2,
          'children'   =>1,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'staying_time' =>'24hrs',
          'price'      =>2334,
        ]);

        //3

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Rajshahi',
          'hotel_name' =>'Rose valley',
          'room'       =>1,
          'room_type'       =>'Single',
          'adult'      =>2,
          'children'   =>2,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'staying_time' =>'24hrs',
          'price'      =>2334,
        ]);

        //3.1

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Comilla',
          'hotel_name' =>'Falcon',
          'room'       =>1,
          'room_type'       =>'Single',
          'adult'      =>2,
          'children'   =>2,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'staying_time' =>'24hrs',
          'price'      =>2334,
        ]);

        //3.2

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Rangpur',
          'hotel_name' =>'Falcon',
          'room'       =>1,
          'room_type'       =>'Delax',
          'adult'      =>1,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'staying_time' =>'24hrs',
          'price'      =>2334,
        ]);

    }
}
