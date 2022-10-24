<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;

use Illuminate\Support\Str;

class LucamScopeTempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $jeffery = User::create([
            'uuid' => Str::uuid(),
            'first_name' => 'Jeffery',
            'last_name' => 'Way',
            'email' => 'jeffery@admin.com',
            'password' =>
                '$2a$12$k4pz5YdA6qIHHWKeoahDguFn6iOGXYDBRlYV3Q1HCgYY/6TwVWU5y', // password
            'role_id' => 3,
        ]);

        $taylor = User::create([
            'uuid' => Str::uuid(),
            'first_name' => 'Taylor',
            'last_name' => 'Otwell',
            'email' => 'taylor@admin.com',
            'password' =>
                '$2a$12$k4pz5YdA6qIHHWKeoahDguFn6iOGXYDBRlYV3Q1HCgYY/6TwVWU5y', // password
            'role_id' => 3,
        ]);
    }
}
