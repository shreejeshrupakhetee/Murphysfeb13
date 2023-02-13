<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               "firstname"=>"Admin",
               "lastname"=>"Panel",
               "email"=>"admin@murphys.com",
               "password"=> bcrypt("secret"),
               "phone"=>"9877656789",
               "companyname"=>"Murphys",
               "streetaddress1"=>"Bhanimandal",
               "city"=>"Lalitpur",
               "state"=>"Bagmati",
               "postcode"=>"123456",
               "surveyinfo"=>"Facebook",
               "currencyname"=>"AUD",
                "is_admin"=>"1",       
            ],
            [
                "firstname"=>"User",
                "lastname"=>"Panel",
                "email"=>"user@murphys.com",
                "password"=> bcrypt("secret"),
                "phone"=>"9877656789",
                "companyname"=>"Murphys",
                "streetaddress1"=>"Bhanimandal",
                "city"=>"Lalitpur",
                "state"=>"Bagmati",
                "postcode"=>"123456",
                "surveyinfo"=>"Facebook",
                "currencyname"=>"AUD",
                "is_admin"=>"0",       
             ],
        ];
        User::insert($users);
    }
}
