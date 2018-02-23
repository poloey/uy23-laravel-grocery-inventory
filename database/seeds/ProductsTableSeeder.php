<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach (Helpers::ITEMS as $item) {
        Product::create([
          'name' => $item,
          'price' => rand(10, 200),
          'quantity' => rand(5, 25)
        ]);
      }
    }
}
