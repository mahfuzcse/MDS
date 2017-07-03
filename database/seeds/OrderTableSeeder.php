<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker\Factory::create();

      // DB::table('orders')->insert([
      //       'order_No' => $faker->randomDigit,
      //       'delivery_date' => 2017-10-02,
      //       'delivery_address' => 'Jessor',
      //       'amount' => 1000,
      //       'discount' => 25,
      //       'payment_status' => 'yes',
      //       'trx_id' => 1111432850,
      //   ]);
      

     $order = new \App\Order([           
             'order_No'         => '899',
             'delivery_date'    => 2017-10-02,
             'delivery_address' => 'Jessor',
             'amount'           => 1000.40,
             'discount'         => 25,
             'payment_status'   => 'yes',
             'trx_id'           => 1111432850
            ]); 
     $order -> save();
 
   $order = new \App\Order([           
             'order_No'         => '800',
             'delivery_date'    => 2015-10-02,
             'delivery_address' => 'Jes',
             'amount'           => 4000,
             'discount'         => 7,
             'payment_status'   => 'yes',
             'trx_id'           => 1111432850
            ]); 
     $order -> save(); 


        //column name:  1.order_No	2.delivery_date	3.delivery_address	4.amount	5.discount	6.payment_status	7.trx_id
    }
}
