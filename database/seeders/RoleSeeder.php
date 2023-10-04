<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(['name'=>'Administrator','key'=>'administrator',]);
        Role::firstOrCreate(['name'=>'Store keeper', 'key'=>'store_keeper', ]);
        Role::firstOrCreate(['name'=>'Reciption',    'key'=>'reciption',    ]);
        Role::firstOrCreate(['name'=>'Doctor',       'key'=>'doctor',       ]);
        Role::firstOrCreate(['name'=>'Laboratory',   'key'=>'laboratory',   ]);
        Role::firstOrCreate(['name'=>'Pharmacist',   'key'=>'pharmacist',   ]);
        Role::firstOrCreate(['name'=>'Preparer',     'key'=>'preparer',     ]);
        Role::firstOrCreate(['name'=>'Giver',        'key'=>'giver',        ]);
        Role::firstOrCreate(['name'=>'So as',        'key'=>'so_as',        ]);
        Role::firstOrCreate(['name'=>'Ps as',        'key'=>'ps_as',        ]);

        $permission_administrator = DB::table('permissions')->where('key','!=','banned')->pluck('id')->toArray();

        $permission_store_keeper = DB::table('permissions')->where('table_name','=','inventories')->pluck('id')->toArray();

        $permission_reciption = DB::table('permissions')->where('table_name','=','patients')->Where('key','!=','destroy_patients')->where('key','!=','reports_patients')->orwhere('table_name','=','appointments')->Where('key','!=','destroy_appointments')->Where('key','!=','edit_appointments')->pluck('id')->toArray();

        $permission_doctor    = DB::table('permissions')
        ->where('table_name','=','patients')->where('key','!=','create_patients')->Where('key','!=','destroy_patients')
        ->orwhere('key','=','index_appointments')->orwhere('key','=','edit_appointments')->orwhere('key','=','reports_appointments')->orwhere('key','=','search_appointments')
        ->orwhere('key','=','index_inventories')->orwhere('key','=','search_inventories')->orwhere('key','=','reports_inventories')
        ->orwhere('table_name','=','r_checkups')
        ->orwhere('table_name','=','r_def_meds')
        ->orwhere('key','=','index_pat_givings')->orwhere('key','=','show_pat_givings')->orwhere('key','=','search_pat_givings')->orwhere('key','=','reports_pat_givings')
        ->orwhere('table_name','=','psy_as')
        ->orwhere('table_name','=','soc_as')->pluck('id')->toArray();

        $permission_laboratory = DB::table('permissions')->where('table_name','=','r_checkups')->orwhere('table_name','=','list_checkups')->orwhere('table_name','=','li_ch_dets')->pluck('id')->toArray();

        $permission_pharmacist = DB::table('permissions')->where('table_name','=','r_def_meds')->orwhere('table_name','=','inventories')->where('key','=','reports_inventories')->pluck('id')->toArray();

        $permission_preparer = DB::table('permissions')->where('table_name','=','r_def_meds')->where('key','=','reports_r_def_meds')->orwhere('key','=','index_r_def_meds')->orwhere('key','=','edit_r_def_meds')->orwhere('key','=','show_r_def_meds')->orwhere('key','=','search_r_def_meds')->pluck('id')->toArray();

        $permission_giver = DB::table('permissions')->where('table_name','=','pat_givings')->pluck('id')->toArray();

        $permission_so_as = DB::table('permissions')->where('table_name','=','soc_as')->pluck('id')->toArray();

        $permission_ps_as = DB::table('permissions')->where('table_name','=','psy_as')->pluck('id')->toArray();

        $admin_role = Role::where('key','administrator')->first();
        $admin_role->permission()->sync($permission_administrator);

        $reciption_role = Role::where('key','reciption')->first();
        $reciption_role->permission()->sync($permission_reciption);

        $store_keeper_role = Role::where('key','store_keeper')->first();
        $store_keeper_role->permission()->sync($permission_store_keeper);

        $doctor_role = Role::where('key','doctor')->first();
        $doctor_role->permission()->sync($permission_doctor);

        $laboratory_role = Role::where('key','laboratory')->first();
        $laboratory_role->permission()->sync($permission_laboratory);

        $pharmacist_role = Role::where('key','pharmacist')->first();
        $pharmacist_role->permission()->sync($permission_pharmacist);

        $preparer_role = Role::where('key','preparer')->first();
        $preparer_role->permission()->sync($permission_preparer);

        $giver_role = Role::where('key','giver')->first();
        $giver_role->permission()->sync($permission_giver);

        $so_as_role = Role::where('key','so_as')->first();
        $so_as_role->permission()->sync($permission_so_as);

        $ps_as_role = Role::where('key','ps_as')->first();
        $ps_as_role->permission()->sync($permission_ps_as);
    }
}
