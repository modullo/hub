<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'first_name' => 'Overlord',
            'last_name' => 'Admin',
            'email' => 'overlord@user.com',
            'role' => 'admin',
            'password' => Hash::make('ZSf_q36PedG78E8B'),
            "phone_number" => "08177171797",
            "gender" => "male",
            "uuid" => "b5965702-1c70-41a8-8b23-6ddffdb5c35b"
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
