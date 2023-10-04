<?php

namespace Database\Seeders;

use App\Models\Li_ch_det;
use App\Models\List_checkup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LiChDetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $HEMATOLOGY = List_checkup::where('name', 'HEMATOLOGY')->first('id');
        Li_ch_det::firstOrCreate([
            'name'  => 'Hemograrn',
            'small_value'  => '35',
            'large_value'  => '37',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Hgb',
            'small_value'  => '9',
            'large_value'  => '11',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'WBC-Total',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'WBC-Differential',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'ESR',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'MPS',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'APPTT',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'B.T',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'G.T',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Blood Flim',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Bone Marrow',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $HEMATOLOGY->id,
        ]);
        $BIOCHEMISTRY = List_checkup::where('name', 'BIOCHEMISTRY')->first('id');
        Li_ch_det::firstOrCreate([
            'name'  => 'FBG',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'PPBG',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'RBG',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'HBA tc',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'BUN',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Creatiine',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Calcium',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Chloride',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'ALT',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'AST',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'CK',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Albumin',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);

        $BIOCHEMISTRY = List_checkup::where('name', 'SEROLOGY')->first('id');
        Li_ch_det::firstOrCreate([
            'name'  => 'ASO',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'CRP',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'RH',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'TIBC',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'ABO grouping-Rh',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Brucells',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'HIV(Screen)',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'HBS Ag(ELISA)',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'H.Pyloni',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);

        $BIOCHEMISTRY = List_checkup::where('name', 'Endoorinology')->first('id');
        Li_ch_det::firstOrCreate([
            'name'  => 'T3',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'T4',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'TSH',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'LH',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'FSH',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Prolactin',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Testosterone',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Estradini',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);

        $BIOCHEMISTRY = List_checkup::where('name', 'Immunology')->first('id');
        Li_ch_det::firstOrCreate([
            'name'  => 'AMA',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'ASMA',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'ANCA',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Sc1-70',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'LKM antibodies',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        $BIOCHEMISTRY = List_checkup::where('name', 'Tumor Markers')->first('id');
        Li_ch_det::firstOrCreate([
            'name'  => 'AFP',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'CEA',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'PSA',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'B-HCG',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'CA-125',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'CA-15-3',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'CA 19.9',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => '5-HIAA',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'SCC',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Anti-ds DNA',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'CA-15-3',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'CA 19.9',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => '5-HIAA',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'SCC',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'B2 micoglobulid',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        $BIOCHEMISTRY = List_checkup::where('name', 'Microsco/Bacterio')->first('id');
        Li_ch_det::firstOrCreate([
            'name'  => 'Gneral Urine Ex',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Gneral Stool Ex',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Stool Occult Blood',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Gram Stain',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Tubotculin Test',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Linine Culture',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        $BIOCHEMISTRY = List_checkup::where('name', 'Urine Chemistry')->first('id');
        Li_ch_det::firstOrCreate([
            'name'  => 'Greatinine Clearance',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Protein 24 hr',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Creatinine',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Lirea',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Calcium',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Sotium',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Magnesium',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Chloride',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Uric Acid',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
        Li_ch_det::firstOrCreate([
            'name'  => 'Amy Lase',
            'small_value'  => '54',
            'large_value'  => '58',
            'list_checkup_id'  => $BIOCHEMISTRY->id,
        ]);
    }
}
