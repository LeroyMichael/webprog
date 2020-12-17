<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class flowerscategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowerscategories')->insert([
            'flowercategoryname' => "Romantic Flower",
            'flowercategoryphoto' => "romance.jpg"
        ]);

        DB::table('flowerscategories')->insert([
            'flowercategoryname' => "Valentine Flower",
            'flowercategoryphoto' => "valentine.jpg"
        ]);
        
        DB::table('flowerscategories')->insert([
            'flowercategoryname' => "Birthday Flower",
            'flowercategoryphoto' => "birthday.jpg"
        ]);

        DB::table('flowerscategories')->insert([
            'flowercategoryname' => "Graduation Flower",
            'flowercategoryphoto' => "graduation.jpg"
        ]);

      
    }
}
