<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710084',
            'name' => 'Dea Vernanda R.N',
            'class' => 'MI-2F',
            'department' => 'JTI',
            'phone_number' => '085879356056',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710107',
            'name' => 'Kristin BR Gultom',
            'class' => 'MI-2F',
            'department' => 'JTI',
            'phone_number' => '081803201717',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710060',
            'name' => 'Mustika Putri W',
            'class' => 'MI-2F',
            'department' => 'JTI',
            'phone_number' => '085706469814',
        ]);
    }
}