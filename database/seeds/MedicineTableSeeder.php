<?php

use Illuminate\Database\Seeder;

class MedicineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('medicines')->insert([
        //     'medicine_name' => 'zxz',
        //     'unit_price' => 10,
        //     'stored_quantity' => 175
        // ]);
        
        $medicine = new \App\Medicine([           
                'medicine_name'  => 'Oxin',
                'medicine_descr' => 'gsrssssssssssssssssssssssssssssshju k,uckujj kjhlkjhlk kkj',
                'img'            => '5.jpg',
                'unit_price'     => 33,
                'stored_quantity'=> 130
            ]); 
        $medicine -> save();


        $medicine = new \App\Medicine([       
                'medicine_name'  => 'mahfuzOx',
                'medicine_descr' => 'gs3333333333ccsshju k,uckujj kjhlkjhlk kkj',
                'img'            => '6.jpg',
                'unit_price'     => 43,
                'stored_quantity'=> 23          
            ]);
        $medicine -> save();

        $medicine = new \App\Medicine([       
                'medicine_name'  => 'mahfuzOx',
                'medicine_descr' => 'gsrsssgeert dvverg vu k,uckujj kjhlkjhlk kkj',
                'img'            => '3.jpg',
                'unit_price'     => 42,
                'stored_quantity'=> 230      
            ]);
        $medicine -> save();

//column name: 1.medicine_name	2.unit_price	3.stored_quantity
    }
}
