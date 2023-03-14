<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wong = [[
            'experience' => 'Ga banyak, cuma mau ngomong ini susah banget 😊',
            'achievment' => 'Ms Word 2016 Specialist, Junior Programmer BNSP, Junior Web Developer BNSP'
        ],
        [
            'experience' => 'Saya pernah mual saat ngoding',
            'achievment' => 'Power 5M game Raise of Kingdom, VIP 11'
        ]];
        DB::table('exps')->insert($wong);
    }
}
