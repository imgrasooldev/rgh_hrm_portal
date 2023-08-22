<?php

namespace Database\Seeders;

use App\Models\DocCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name' => 'Resume',
            'Passport Size Photographs',
            'CNIC',
            'Parent CNIC',
            'Experience Latter',
            'Educational Doc',
            'Salary Slip'
        ];
        foreach($data as $item){
            DocCategory::create(
                [
                    'name' => $item
                ]
            );
        }
    }
}
