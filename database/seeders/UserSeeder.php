<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => Hash::make('password'),
                'remember_token'     => null,
                'email_verified_at'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'id'                 => 2,
                'name'               => 'Manager',
                'email'              => 'manager@manager.com',
                'password'           => Hash::make('password'),
                'remember_token'     => null,
                'email_verified_at'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'id'                 => 3,
                'name'               => 'User1',
                'email'              => 'user1@user1.com',
                'password'           => Hash::make('password'),
                'remember_token'     => null,
                'email_verified_at'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
             [
                'id'                 => 4,
                'name'               => 'User2',
                'email'              => 'user2@user2.com',
                'password'           => Hash::make('password'),
                'remember_token'     => null,
                'email_verified_at'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
             [
                'id'                 => 5,
                'name'               => 'User3',
                'email'              => 'user3@user3.com',
                'password'           => Hash::make('password'),
                'remember_token'     => null,
                'email_verified_at'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
        ];

        User::insert($users);

        User::factory()->count(20)->create();

        /* DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
        ]); */
    }
}
