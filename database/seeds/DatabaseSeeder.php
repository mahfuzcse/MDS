<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(MedicineTableSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(UserSeeder::class);        


    }
}
