<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Sản phẩm 1',
            'price' => 100000,
        ]);

        // Thêm các sản phẩm khác nếu cần
    }
}