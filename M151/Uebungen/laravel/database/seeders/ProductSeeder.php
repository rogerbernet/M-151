<?php

namespace Database\Seeders;

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
        Product::create([
            'name'=> 'Rotes Toastbrot',
            'price'=> 12.5,
            'details'=> 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. ',
            'manual' => '',
            'image'=> '/pictures/toast_rot.jpg'
        ]);
        Product::create([
            'name'=> 'Blaues Toastbrot',
            'price'=> 2.5,
            'details'=> 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. ',
            'manual' => '',
            'image'=> '/pictures/toast_blau.png'
        ]);
        Product::create([
            'name'=> 'Toastbrot',
            'price'=> 8.5,
            'details'=> 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. ',
            'manual' => '',
            'image'=> '/pictures/toast.jpg'
        ]);

    }
}
