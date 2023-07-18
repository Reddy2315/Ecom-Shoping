<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//dummy data import db
use Illuminate\Support\Facades\DB;
//encprit password
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Sai',
            'email' => 'sai@gmail.com',
            'password' => Hash::make('Sai@123')

        ]);
       
    }
}
