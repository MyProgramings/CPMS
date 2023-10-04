<?php

namespace Database\Seeders;

use App\Models\Inventoris;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventoris::firstOrCreate([
            'name'  => 'Banadool',
            'quantity'  => '20',
            'power'  => '5000',
            'medicines_shape'  => 'علب',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2023-09-02',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Banadool',
            'quantity'  => '100',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2023-09-02',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Lasix',
            'quantity'  => '40',
            'power'  => '15000',
            'medicines_shape'  => 'Amp',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-09-14',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Zalediar',
            'quantity'  => '40',
            'power'  => '15000',
            'medicines_shape'  => 'Tab',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-03-14',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Extra',
            'quantity'  => '10',
            'power'  => '15000',
            'medicines_shape'  => 'Tab',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-09-14',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Caceear',
            'quantity'  => '50',
            'power'  => '15000',
            'medicines_shape'  => 'syp',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-09-14',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Vit E',
            'quantity'  => '90',
            'power'  => '15000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-09-14',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Meloxiceam',
            'quantity'  => '60',
            'power'  => '15000',
            'medicines_shape'  => 'tap',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-09-14',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Canulla 20g',
            'quantity'  => '40',
            'power'  => '15000',
            'medicines_shape'  => '-',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-09-18',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Liver albumin',
            'quantity'  => '80',
            'power'  => '15000',
            'medicines_shape'  => 'tap',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-01-14',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Irovit',
            'quantity'  => '40',
            'power'  => '15000',
            'medicines_shape'  => 'tap',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-03-14',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Epimag',
            'quantity'  => '80',
            'power'  => '15000',
            'medicines_shape'  => 'tap',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-03-14',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => ' Mebo',
            'quantity'  => '90',
            'power'  => '15000',
            'medicines_shape'  => 'nint',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-08-14',
            'price'  => '90000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Ciplox',
            'quantity'  => '40',
            'power'  => '15000',
            'medicines_shape'  => 'tap',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-04-14',
            'price'  => '80000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Platenaz',
            'quantity'  => '30',
            'power'  => '19000',
            'medicines_shape'  => 'tap',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-09-14',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Royamin',
            'quantity'  => '200',
            'power'  => '15000',
            'medicines_shape'  => 'drip',
            'medicine_type'  => 'supplementary',
            'complete_date'  => '2022-09-3',
            'price'  => '20000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Mesna',
            'quantity'  => '30',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-14',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Imatinibe',
            'quantity'  => '20',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Ondansetron',
            'quantity'  => '20',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'lomustine',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Sorafinb',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Femara',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Duragesic',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Glivec',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Zoladex',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Xeloda',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Temodal',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'MorphinSyp',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Neupogen inj',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
        Inventoris::firstOrCreate([
            'name'  => 'Gemectabine',
            'quantity'  => '70',
            'power'  => '5000',
            'medicines_shape'  => 'Cap',
            'medicine_type'  => 'chemist',
            'complete_date'  => '2022-10-15',
            'price'  => '10000',
            'store_keeper'  => 'سالم عوض',
        ]);
    }
}
