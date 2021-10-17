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
            'nim' => '2031710017',
            'name' => 'Eva Monika Septiana',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '085232753117',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710074',
            'name' => 'Fariz Al Baihaqi',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '0895339293604',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710171',
            'name' => 'Firda Arga Putri',
            'class' => 'MI-2E',
            'department' => 'JTI',
            'phone_number' => '08383158841',
        ]);

    }
}
