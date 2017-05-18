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

      DB::table('orders')->insert([
            'order_No' => $faker->randomDigit,
            'delivery_date' => 2017-10-02,
            'delivery_address' => 'Jessor',
            'amount' => 1000,
            'discount' => 25,
            'payment_status' => 'yes',
            'trx_id' => 1111432850,
        ]);
      DB::table('orders')->insert([
            'order_No' => 4,
            'delivery_date' => 2017-02-02,
            'delivery_address' => 'Hobigonf',
            'amount' => 150,
            'discount' => 10,
            'payment_status' => 'No',
            'trx_id' => 12323455,
        ]);
      DB::table('orders')->insert([
            'order_No' => 5,
            'delivery_date' => 2017-02-12,
            'delivery_address' => 'Dinajpur',
            'amount' => 1850,
            'discount' => 40,
            'payment_status' => 'yes',
            'trx_id' => 111000001,
        ]);

        //column name:  1.order_No	2.delivery_date	3.delivery_address	4.amount	5.discount	6.payment_status	7.trx_id
    }
}
