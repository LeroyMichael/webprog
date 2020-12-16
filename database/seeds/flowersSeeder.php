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
        DB::table('flowers')->insert([
            'flowercategories' => "Romantic Flower",
            'flowername' => "Be My Lady",
            'flowerprice' => "1200000",
            'flowerdescription' => "You will forever be my always",
            'flowerphoto' => "be my lady.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Romantic Flower",
            'flowername' => "Floral Fantasy",
            'flowerprice' => "1300000",
            'flowerdescription' => "Hampers are a perfect gift for any occasion and with the wide selection",
            'flowerphoto' => "Floral Fantasy.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Romantic Flower",
            'flowername' => "Hazel Eyes",
            'flowerprice' => "1100000",
            'flowerdescription' => "Combination of vibrant and soft color create this perfect look ",
            'flowerphoto' => "be my lady.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Romantic Flower",
            'flowername' => "Klynn",
            'flowerprice' => "1200000",
            'flowerdescription' => "The perfect combination of Blue and Purple create this unusual romantic look",
            'flowerphoto' => "klynn.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Romantic Flower",
            'flowername' => "Klynn",
            'flowerprice' => "1200000",
            'flowerdescription' => "The perfect combination of Blue and Purple create this unusual romantic look",
            'flowerphoto' => "klynn.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Romantic Flower",
            'flowername' => "Klynn",
            'flowerprice' => "1200000",
            'flowerdescription' => "The perfect combination of Blue and Purple create this unusual romantic look",
            'flowerphoto' => "klynn.jpg"
        ]);
    }
}
