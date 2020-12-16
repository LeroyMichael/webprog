<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class flowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('flowerscategories')->insert([
            'flowercategories' => "Romantic Flower",
            'flowername' => "Be My Lady",
            'flowerprice' => "Rp. 1.200.000",
            'flowerdescription' => "You will forever be my always Red and Pink with touch of purple create this beautiful fleurs box. (Diametre 25cm)",
            'flowerphoto' => "be my lady.jpg"
        ]);

    }
}
