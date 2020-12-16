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
            'flowercategoryname' => "Romantic Flower"
        ]);

        DB::table('flowerscategories')->insert([
            'flowercategoryname' => "Birthday Flower"
        ]);

        DB::table('flowerscategories')->insert([
            'flowercategoryname' => "Graduation Flower"
        ]);

        DB::table('flowerscategories')->insert([
            'flowercategoryname' => "Valentine Flower"
        ]);
    }
}
