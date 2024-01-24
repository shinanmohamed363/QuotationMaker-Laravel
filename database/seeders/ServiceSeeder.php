<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name'=>'shopping application',
                'price'=>'1200',
                'category'=>'web Application',
                'description'=>'creating a attractive shopping application,with your friendly interface,using laravel php ',
                'gallery'=>'C:\Users\shina\Downloads\images.jpg'
            ],
            [
                'name'=>'hospital Management application',
                'price'=>'1800',
                'category'=>'web Application',
                'description'=>'creating a attractive hospital application,with your friendly interface,using laravel php ',
                'gallery'=>'https://www.shutterstock.com/image-photo/documents-concept-doctor-use-computer-260nw-2360647421.jpg'
            ],
            [
                'name'=>'real eastate application',
                'price'=>'1290',
                'category'=>'web Application',
                'description'=>'creating a attractive real etate application,with your friendly interface,using laravel php ',
                'gallery'=>'"C:\Users\shina\Downloads\download.jpg"'
            ],
            [
                'name'=>'hotel management application',
                'price'=>'1900',
                'category'=>'web Application',
                'description'=>'creating a attractive hotel managenet application,with your friendly interface,using laravel php ',
                'gallery'=>'"C:\Users\shina\Downloads\download (1).jpg"'
            ],

           
        ]);
    }
}
