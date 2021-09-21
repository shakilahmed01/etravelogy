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
          'adult'      =>2,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>5000,
        ]);

        //1.1

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'coxs bazar',
          'hotel_name' =>'sea shell',
          'room'       =>1,
          'adult'      =>2,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>5000,
        ]);

        //1.2

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'coxs bazar',
          'hotel_name' =>'Rose valley',
          'room'       =>1,
          'adult'      =>2,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //2

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'sylhet',
          'hotel_name' =>'Rose valley',
          'room'       =>1,
          'adult'      =>2,
          'children'   =>1,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //2.1

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'sylhet',
          'hotel_name' =>'Falcon',
          'room'       =>1,
          'adult'      =>2,
          'children'   =>1,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //2.2

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'sylhet',
          'hotel_name' =>'Red valvet',
          'room'       =>1,
          'adult'      =>2,
          'children'   =>1,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //3

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Rajshahi',
          'hotel_name' =>'Rose valley',
          'room'       =>1,
          'adult'      =>2,
          'children'   =>2,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //3.1

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Rajshahi',
          'hotel_name' =>'Falcon',
          'room'       =>1,
          'adult'      =>2,
          'children'   =>2,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //3.2

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Rajshahi',
          'hotel_name' =>'Srigal',
          'room'       =>1,
          'adult'      =>2,
          'children'   =>2,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //3.3

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Rajshahi',
          'hotel_name' =>'Red Valvet',
          'room'       =>1,
          'adult'      =>2,
          'children'   =>2,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //4

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Borishal',
          'hotel_name' =>'Rose valley',
          'room'       =>1,
          'adult'      =>1,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //4.1

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Borishal',
          'hotel_name' =>'srigal',
          'room'       =>1,
          'adult'      =>1,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //4.2

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Borishal',
          'hotel_name' =>'Falcon',
          'room'       =>1,
          'adult'      =>1,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //4.3

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'Borishal',
          'hotel_name' =>'Sea Shell',
          'room'       =>1,
          'adult'      =>1,
          'children'   =>0,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //5

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'josshor',
          'hotel_name' =>'Rose valley',
          'room'       =>2,
          'adult'      =>4,
          'children'   =>2,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //5.1

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'josshor',
          'hotel_name' =>'Sea shell',
          'room'       =>2,
          'adult'      =>4,
          'children'   =>2,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //5.2

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'josshor',
          'hotel_name' =>'Srigal',
          'room'       =>2,
          'adult'      =>4,
          'children'   =>2,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);

        //5.3

        Ticket::create([
          'image'     => 'tm-img-07.jpg',
          'destination'=>'josshor',
          'hotel_name' =>'Falcon',
          'room'       =>2,
          'adult'      =>4,
          'children'   =>2,
          'checkin'    =>'2021-09-16',
          'checkout'   =>'2021-09-19',
          'price'      =>7000,
        ]);
    }
}
