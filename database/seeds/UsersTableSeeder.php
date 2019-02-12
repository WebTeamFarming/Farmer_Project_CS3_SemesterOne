<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert 10 farmers
        for($i = 1; $i <= 10; $i++){
            DB::table('users')->insert([
                'name' => 'farmer'.$i,
                'email' => 'farmer'.$i.'@gmail.com',
                'password' => bcrypt('secret'),
                'phone' => '012345678'.$i,
                'user_type_id' => '1',
            ]);
        }
        // insert 10 companies
        for($i = 1; $i <= 10; $i++){
            DB::table('users')->insert([
                'name' => 'company'.$i,
                'email' => 'company'.$i.'@gmail.com',
                'password' => bcrypt('secret'),
                'phone' => '021345678'.$i,
                'user_type_id' => '2',
            ]);
        }
        // insert 10 admins
        for($i = 0; $i < 10; $i++){
            DB::table('users')->insert([
                'name' => 'admin'.$i,
                'email' => 'admin'.$i.'@gmail.com',
                'password' => bcrypt('secret'),
                'phone' => '02245678'.$i,
                'user_type_id' => '3',
            ]);
        }
    }
}
