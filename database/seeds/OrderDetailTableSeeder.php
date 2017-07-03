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
        // DB::table('order_details')->insert([
        //     'order_id' => 3,
        //     'medicine_id' => 1003,
        //     'quantity' => 45,
        //     'price' => 550,
        // ]);

        $order_details = new \App\OrderDetail([           
             'order_id' => 12,
             'medicine_id' => 4003,
             'quantity' => 456,
             'price' => 50
            ]); 
        $order_details -> save(); 


          $order_details = new \App\OrderDetail([           
             'order_id' => 12,
             'medicine_id' => 4003,
             'quantity' => 456,
             'price' => 50
            ]); 
        $order_details -> save(); 

          $order_details = new \App\OrderDetail([           
             'order_id' => 12,
             'medicine_id' => 4003,
             'quantity' => 456,
             'price' => 50
            ]); 
        $order_details -> save(); 
       
      //column name:  1.order_id	2.medicine_id	3.quantity	4.price
    }
}
