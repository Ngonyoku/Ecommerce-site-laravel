<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'title' => 'Sofft Fluffy Carpets',
            'description' => 'Size 5 by 8 \nMaterial: Soft Fluffy',
            'tags' => 'carpets',
            'price' => 2550,
        ]);

        Product::create([
            'title' => '3D Carpets',
            'description' => 'Size 5 by 8 \n',
            'tags' => 'carpets',
            'price' => 4500,
        ]);

        Product::create([
            'title' => '3D Carpets',
            'description' => 'Size 7 by 10 \n',
            'tags' => 'carpets',
            'price' => 5800,
        ]);

        Product::create([
            'title' => 'Men Wallet',
            'description' => 'Material: Leather \nColors: As seen in the photos',
            'tags' => 'wallet',
            'price' => 650,
        ]);

        Product::create([
            'title' => 'Multifunctional 5 Tier Shoe Rack Organizer + Simple Floor Coat Hat Rack with 8 hooks',
            'description' => 'High quality stainless steel \nAnti-rust and durable to use. \nEasily be relocated Sturdy & lightweight.
            \nEasy assembly and dismantle.
            \nDimensions 60*30*171cm.
            \nHas smaller frames ',
            'tags' => 'rach, closet, shoerack',
            'price' => 2500,
        ]);
    }
}
