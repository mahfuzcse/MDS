<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            'order_id' => 3,
            'medicine_id' => 1003,
            'quantity' => 45,
            'price' => 550,
        ]);
        DB::table('order_details')->insert([
            'order_id' => 4,
            'medicine_id' => 1004,
            'quantity' => 15,
            'price' => 80,
        ]);
        DB::table('order_details')->insert([
            'order_id' => 5,
            'medicine_id' => 1005,
            'quantity' => 25,
            'price' => 823,
        ]);
        DB::table('order_details')->insert([
            'order_id' => 6,
            'medicine_id' => 1006,
            'quantity' => 222,
            'price' => 450,
        ]);

      //column name:  1.order_id	2.medicine_id	3.quantity	4.price
    }
}
