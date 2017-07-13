<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User([

             'fname'      => 'Abdullah',
             'lname'      => 'All Hares',
             'phNo'       => '043242213',
             'email'      => 'hares13@gmail.com',
             'password'   => '4444'
            ]); 
     $user -> save();

      $user = new \App\User([

             'fname'      => 'Najmul',
             'lname'      => 'Hassan',
             'phNo'       => '099999999',
             'email'      => 'najmul13@gmail.com',
             'password'   => '3333'
            ]); 
     $user -> save();
    }


    }

  
