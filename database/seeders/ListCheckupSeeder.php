<?php

namespace Database\Seeders;

use App\Models\List_checkup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListCheckupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        List_checkup::firstOrCreate([
            'name'  => 'HEMATOLOGY',
        ]);
        List_checkup::firstOrCreate([
            'name'  => 'BIOCHEMISTRY',
        ]);
        List_checkup::firstOrCreate([
            'name'  => 'SEROLOGY',
        ]);
        List_checkup::firstOrCreate([
            'name'  => 'Endoorinology',
        ]);
        List_checkup::firstOrCreate([
            'name'  => 'Immunology',
        ]);
        List_checkup::firstOrCreate([
            'name'  => 'Tumor Markers',
        ]);
        List_checkup::firstOrCreate([
            'name'  => 'Microsco/Bacterio',
        ]);
        List_checkup::firstOrCreate([
            'name'  => 'Urine Chemistry',
        ]);
    }
}
