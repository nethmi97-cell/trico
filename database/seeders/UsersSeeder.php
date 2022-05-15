<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        $superadmin = User::create([
            'name' => 'Super Admin',
            'username' => 'super-admin',
            'email' => 'superadministrator@app.com',
            'password' => Hash::make('1234'),
        ]);
        $superadmin->attachRole('superadministrator');


        $admin = User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'administrator@app.com',
            'password' => Hash::make('1234'),
        ]);
        $admin->attachRole('administrator');


        $client = User::create([
            'name' => 'Client',
            'username' => 'client',
            'email' => 'client@app.com',
            'password' => Hash::make('1234'),
        ]);
        $client->attachRole('client');
    }
}
