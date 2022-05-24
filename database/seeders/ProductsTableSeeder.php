<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'product_name' => 'MacBook Pro',
            'product_description' => 'Apple Laptop'
        ]);

        Product::create([
            'product_name' => 'Huawei GR5 2017',
            'product_description' => 'Andriod Smart Phone'
        ]);
    }
}
