<?php

use App\Sale;
use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach (range(1, 5) as $i) {
        foreach (range(1, rand(1, 5)) as $k) {
          $date = date('Y-m-d');
          $date = $date . " - {$i} days";
          Sale::create([
            'product_id' => rand(1, count(Helpers::ITEMS)),
            'quantity' => rand(1, 10),
            'price' => rand(10, 150),
            'date' => date('Y-m-d', strtotime($date))
          ]);
        }
      }
    }
}
