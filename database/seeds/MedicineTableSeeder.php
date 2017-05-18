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
        DB::table('medicines')->insert([
            'medicine_name' => 'fenalex',
            'unit_price' => 100,
            'stored_quantity' => 100,
        ]);

        DB::table('medicines')->insert([
            'medicine_name' => 'Partilex',
            'unit_price' => 20,
            'stored_quantity' => 132,
        ]);

        DB::table('medicines')->insert([
            'medicine_name' => 'hortic',
            'unit_price' => 23,
            'stored_quantity' => 235,
        ]);
        DB::table('medicines')->insert([
            'medicine_name' => 'molatec',
            'unit_price' => 21,
            'stored_quantity' => 90,
        ]);
        DB::table('medicines')->insert([
            'medicine_name' => 'urdes',
            'unit_price' => 22,
            'stored_quantity' => 80,
        ]);
//column name: 1.medicine_name	2.unit_price	3.stored_quantity
    }
}
