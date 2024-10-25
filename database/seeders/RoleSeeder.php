<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat 3 role: super_admin, organizer, participant
        $superAdminRole = Role::firstOrCreate([
            'name' => 'super_admin'
        ]);

        // $organizerRole = Role::firstOrCreate([
        //     'name' => 'organizer'
        // ]);

        // Membuat user dengan role super_admin tanpa perlu register lagi
        $user = User::firstOrCreate(
            ['email' => 'super@admin.com'], // Email harus unik
            [
                'name' => 'Admin', // Ganti sesuai kebutuhan
                'password' => Hash::make('password'), // Ganti password sesuai keinginan
            ]
        );
        // Assign role super_admin ke user tersebut
        $user->assignRole($superAdminRole);
    }
}
