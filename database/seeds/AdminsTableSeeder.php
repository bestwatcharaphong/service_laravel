<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('admins')->truncate();
       DB:: table('admins')->insert([
         'name' => 'Best',
         'username' => 'Admin',
         'email' => 'watcharaphong505@outlook.com',
         'password' => Hash::make('123456')
       ]);
    }
}
