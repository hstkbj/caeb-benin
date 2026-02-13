<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'full_name' => 'Superadmin',
                'email' => 'superadmin@caeb.com',
                'role' => 'Superadmin',
                'password' => 'caebSuper@2025',
            ],
            [
                'full_name' => 'Admin',
                'email' => 'admin@caeb.com',
                'role' => 'Admin',
                'password' => 'caebAdmin@2025',
            ],
            [
                'full_name' => 'Auteur',
                'email' => 'auteur@caeb.com',
                'role' => 'Auteur',
                'password' => 'caebAuthor@2025',
            ],
            [
                'full_name' => 'Approbateur',
                'email' => 'approbateur@caeb.com',
                'role' => 'Approbateur',
                'password' => 'caebAppro@2025',
            ],
        ];

        foreach ($users as $user) {
            $roleId = DB::table('roles')->where('name', $user['role'])->value('id');

            DB::table('users')->insert([
                'full_name' => $user['full_name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']), // personnalisé
                'role_id' => $roleId,
                'is_active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
