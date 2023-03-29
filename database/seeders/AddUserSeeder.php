<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jelema=[[
            'username' => 'elanglinglung',
            'name' => 'Elang Putra Adam',
            'email' => 'eyelang@gmail.com',
            'password' => Hash::make('password')
        ],
        [
            'username' => 'bagood',
            'name' => 'Bagus Dwi Putranto',
            'email' => 'bagusguild@gmail.com',
            'password' => Hash::make('password')
        ]];
        DB::table('users')->insert($jelema);
    }
}
