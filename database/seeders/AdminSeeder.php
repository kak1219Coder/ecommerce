<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creation de l admin 

        Admin::create([
                'name'=>'Admin',
                'username'=>'KAK1219',
                'email'=>'koneakader1219@gmail.com',
                'password'=>Hash::make('1219')
        ]);
    }
}
