<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Webproduct;

class WebProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $webproducts = [
            ["name"=>"Value Plan","description1"=>"5-7 Pages","description2"=>"Unlimited revisions","description3"=>"Static","description4"=>"Responsive Layout","description5"=>"5 webmail account","description6"=>"Basic S.E.O.","description7"=>"Free website update","description8"=>"500MB web space","description9"=>"Bandwidth 99.9% uptime guaranteed","description10"=>"CPanel","description11"=>"24X7 Email support","description12"=>"Free domain","price"=>"699","payment_link"=>"https://square.link/u/nPUPoNN1"],
            ["name"=>"Power Plan","description1"=>"15+ Dynamic Pages","description2"=>"Unlimited revisions","description3"=>"CMS","description4"=>"Responsive Layout","description5"=>"10 webmail account","description6"=>"Basic S.E.O.","description7"=>"Free website update","description8"=>"1GB web space","description9"=>"Bandwidth 99.9% uptime guaranteed","description10"=>"CPanel","description11"=>"24X7 Email support","description12"=>"Free domain","price"=>"899","payment_link"=>"https://square.link/u/dYCdd0hF"],
            ["name"=>"Ecommerce Plan","description1"=>"Unlimited Dynamic Pages","description2"=>"Unlimited revisions","description3"=>"Ecommerce","description4"=>"Responsive Layout","description5"=>"15 webmail account","description6"=>"Basic S.E.O.","description7"=>"Free website update","description8"=>"2GB web space","description9"=>"Bandwidth 99.9% uptime guaranteed","description10"=>"CPanel","description11"=>"24X7 Email support","description12"=>"Free domain","price"=>"1600","payment_link"=>"https://square.link/u/0YyMW8AX"],
        ];
        Webproduct::insert($webproducts);
    }
}