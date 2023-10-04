<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate([
            'name'              => 'Admin',
            'username'          => 'admin',
            'email'             => 'admin@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','administrator')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'Store keeper',
            'username'          => 'store_keeper',
            'email'             => 'store_keeper@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','store_keeper')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'Reciption',
            'username'          => 'reciption',
            'email'             => 'reciption@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','reciption')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'Salem Mohammed',
            'username'          => 'salem',
            'email'             => 'salem@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','doctor')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'Mohammed Salem',
            'username'          => 'mohammed',
            'email'             => 'mohammed@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','doctor')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'Omer Ahmed',
            'username'          => 'omer',
            'email'             => 'omer@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','doctor')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'Laboratory',
            'username'          => 'laboratory',
            'email'             => 'laboratory@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','laboratory')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'Pharmacist',
            'username'          => 'pharmacist',
            'email'             => 'pharmacist@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','pharmacist')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'Preparer',
            'username'          => 'preparer',
            'email'             => 'preparer@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','preparer')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'Giver',
            'username'          => 'giver',
            'email'             => 'giver@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','giver')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'So as',
            'username'          => 'so_as',
            'email'             => 'so_as@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','so_as')->first()->id,
            'last_seen'         => null,
        ]);
        User::firstOrCreate([
            'name'              => 'Ps as',
            'username'          => 'ps_as',
            'email'             => 'ps_as@admin.com',
            'email_verified_at' => now(),
            'password'          => Hash::make('admin1234'), // admin1234
            'remember_token'    => Str::random(10),
            'role_id'           => Role::where('key','ps_as')->first()->id,
            'last_seen'         => null,
        ]);
    }
}
