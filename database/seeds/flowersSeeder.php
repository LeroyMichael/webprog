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
            'flowercategories' => "Valentine Flower",
            'flowername' => "Amour",
            'flowerprice' => "1400000",
            'flowerdescription' => "The glimpse of glamour scenery brought to you by a perfect combination of lavender dephinium, damascus carnation, dyed pink gompie, blue hydrangea & white phalaenopsis.",
            'flowerphoto' => "Amour.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Valentine Flower",
            'flowername' => "Austin Blooms",
            'flowerprice' => "1600000",
            'flowerdescription' => "Meet Austin Blooms, a beautiful and stylish arrangement, perfect for any special occassion",
            'flowerphoto' => "Austin Blooms.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Valentine Flower",
            'flowername' => "Cascade Orchid - 10 stems",
            'flowerprice' => "1600000",
            'flowerdescription' => "Need something different for Corporate Gift, presented a stunning 10 stems of elegant white phalaenopsis in black vase. perfect for any occassion. min. 10 buds per stem",
            'flowerphoto' => "Cascade Orchid - 10 stems.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Valentine Flower",
            'flowername' => "Pastel Sorbet",
            'flowerprice' => "1300000",
            'flowerdescription' => "we create this beautiful pastel sorbet with passion, the sweet and delicate pink peonies combine with peach and soft white color.",
            'flowerphoto' => "Pastel Sorbet.jpg"
        ]);


        DB::table('flowers')->insert([
            'flowercategories' => "Birthday Flower",
            'flowername' => "Pretty Dark Purple",
            'flowerprice' => "1400000",
            'flowerdescription' => "Pretty Dark Purple is a representation of how loveliness shines out of the color purple.",
            'flowerphoto' => "Pretty Dark Purple.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Birthday Flower",
            'flowername' => "Pretty in Pink",
            'flowerprice' => "1100000",
            'flowerdescription' => "Pink tone bouquet with pink roses, lily, and our signature Phalaenopsis",
            'flowerphoto' => "Pretty in Pink.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Birthday Flower",
            'flowername' => "Romance in Blooms",
            'flowerprice' => "1350000",
            'flowerdescription' => "Fresh romantic blooms in Soft Pink and Blue touch of Roses, Carnations, Snap Dragons, and Hydrangea ",
            'flowerphoto' => "romance in blooms.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Birthday Flower",
            'flowername' => "Snap Oh My",
            'flowerprice' => "1150000",
            'flowerdescription' => "A beauty combination of Snap Dragons and Roses, create a simple and clean arrangement ",
            'flowerphoto' => "Snap Oh My.jpg"
        ]);


        DB::table('flowers')->insert([
            'flowercategories' => "Graduation Flower",
            'flowername' => "The Candy Basket",
            'flowerprice' => "1800000",
            'flowerdescription' => "our special candy basket features peach garden roses, coolwater roses, and sweet avalanche roses with the pretty sweet pink carnations and little touch of peach hypericum",
            'flowerphoto' => "The Candy Basket.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Graduation Flower",
            'flowername' => "To Mum With Love",
            'flowerprice' => "1150000",
            'flowerdescription' => "Red roses and white orchids, can I say it's a perfect match? it's all about love",
            'flowerphoto' => "To Mum With Love.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Graduation Flower",
            'flowername' => "Tropical Summer",
            'flowerprice' => "1300000",
            'flowerdescription' => "This beautiful arrangement is a beautiful reminder to summer with sunshine and blue sky",
            'flowerphoto' => "Tropical Summer.jpg"
        ]);
        DB::table('flowers')->insert([
            'flowercategories' => "Graduation Flower",
            'flowername' => "White Perfection Orchid",
            'flowerprice' => "2000000",
            'flowerdescription' => "A luxurious white perfection Phalaenopsis presented in a beautiful red and pink Japanese style wrapping. min. 12 buds per stem (5 stems)",
            'flowerphoto' => "White Perfection Orchid.jpg"
        ]);
    }
}
