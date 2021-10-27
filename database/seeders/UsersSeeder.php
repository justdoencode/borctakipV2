<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
          'first_name'=>'Samet',
          'last_name'=>'Poyraz',
          'email'=>'poyraz50_38@hotmail.com',
          'password'=>bcrypt(123456),
        ]);
    }
}
