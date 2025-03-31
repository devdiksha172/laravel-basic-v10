<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'name' => 'Tech Solutions Ltd',
                'email' => 'info@techsolutions.com',
                'logo' => 'logos/techsolutions.png',
                'website' => 'https://www.techsolutions.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Innovate Corp',
                'email' => 'contact@innovatecorp.com',
                'logo' => 'logos/innovatecorp.png',
                'website' => 'https://www.innovatecorp.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FutureTech Industries',
                'email' => 'support@futuretech.com',
                'logo' => 'logos/futuretech.png',
                'website' => 'https://www.futuretech.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
