<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ["name"=>"Premium Web Hosting","description1"=>"Packed with great features,such as one-click software installs,24/7 support","description2"=>"10 GB SSD Storage","description3"=>"10 MySQL Database","description4"=>"1 Website","description5"=>"cPanel Control Panel","description6"=>"Auto Backup & Cloud Storage","price"=>"230","payment_link"=>"https://square.link/u/ESe51wX1"],
            ["name"=>"VPS Web Hosting","description1"=>"Packed with great features, such as one-click software installs,24/7 support","description2"=>"8 GB RAM","description3"=>"150 GB NVMe SSD Storage","description4"=>"2 TB Transfer","description5"=>"cPanel Control Panel","description6"=>"2 Cores","price"=>"250","payment_link"=>"https://square.link/u/sVrCL8sa"],
            ["name"=>"Wordpress Hosting","description1"=>"Packed with great features, such as one-click software installs,24/7 support","description2"=>"200k visits per month","description3"=>"2 GB backups","description4"=>"Free SSL certificate","description5"=>"Free domain included","description6"=>"Auto Backup & Cloud Storage","price"=>"210","payment_link"=>"https://square.link/u/FfXaBVHV"],
       ];
       Product::insert($products);
    }
}
