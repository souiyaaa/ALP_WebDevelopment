<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competition')->insert([
            [
                'competition_name' => 'Digital Creative Student Challenge 2K24',
                'start_date' => '2024-12-15 09:00:00',
                'end_date' => '2024-12-18 17:00:00',
                'registration_duedate' => '2024-12-10 23:59:59',
                'registration_fee' => 50000,
            ],
            [
                'competition_name' => 'Digital Creative Student Challenge 2K23',
                'start_date' => '2023-12-15 09:00:00',
                'end_date' => '2024-12-18 17:00:00',
                'registration_duedate' => '2024-12-10 23:59:59',
                'registration_fee' => 50000,
            ],
            [
                'competition_name' => 'Digital Creative Student Challenge 2K22',
                'start_date' => '2024-12-15 09:00:00',
                'end_date' => '2024-12-18 17:00:00',
                'registration_duedate' => '2024-12-10 23:59:59',
                'registration_fee' => 50000,
            ]
        ]);
    }
}
