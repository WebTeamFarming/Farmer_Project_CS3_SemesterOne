<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'user_type_id' => '1',
            'user_type' => 'Farmer',
        ]);

        DB::table('user_types')->insert([
            'user_type_id' => '2',
            'user_type' => 'Company',
        ]);

        DB::table('user_types')->insert([
            'user_type_id' => '3',
            'user_type' => 'Admin',
        ]);
    }
}
