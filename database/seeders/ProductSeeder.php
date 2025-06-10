<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder {
    public function run(): void {
        Product::insert([
            [
                'name' => 'Biskuit',
                'image' => 'images/biskuit.png',
                'category' => 'bahan_baku',
            ],
            [
                'name' => 'Susu',
                'image' => 'images/susu.png',
                'category' => 'bahan_baku',
            ],
            [
                'name' => 'Pakan Ayam Super',
                'image' => 'images/pakan-ayam.png',
                'category' => 'pakan_jadi',
            ],
            [
                'name' => 'Pakan Babi',
                'image' => 'images/pakan-babi.png',
                'category' => 'bahan_baku',
            ],
            [
                'name' => 'nav',
                'image' => 'images/nav.jpg',
                'category' => 'bahan_baku',
            ],
            [
                'name' => 'Pakan1',
                'image' => 'images/pakan1.jpg',
                'category' => 'bahan_baku',
            ],
            [
                'name' => 'Pakan2',
                'image' => 'images/pakan2.jpg',
                'category' => 'bahan_baku',
            ],
            [
                'name' => 'Pakan3',
                'image' => 'images/pakan3.jpg',
                'category' => 'bahan_baku',
            ],
            [
                'name' => 'Pakan4',
                'image' => 'images/pakan4.jpg',
                'category' => 'bahan_baku',
            ],
            [
                'name' => 'Pakan5',
                'image' => 'images/pakan5.jpg',
                'category' => 'bahan_baku',
            ],
            [
                'name' => 'Pakan6',
                'image' => 'images/pakan6.jpg',
                'category' => 'bahan_baku',
            ],
        ]);
    }
}
