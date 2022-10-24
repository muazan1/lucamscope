<?php

namespace Database\Seeders\Lucamscope;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use App\Models\User;

class LucamScopeTempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jeffery = User::factory(1)->create([
            'first_name' => 'Jeffery',
            'last_name' => 'Way',
            'email' => 'jeffery@admin.com',
            'password' =>
                '$2a$12$k4pz5YdA6qIHHWKeoahDguFn6iOGXYDBRlYV3Q1HCgYY/6TwVWU5y',
            'role_id' => 3,
        ]);

        $taylor = User::factory(1)->create([
            'first_name' => 'Taylor',
            'last_name' => 'Otwell',
            'email' => 'taylor@admin.com',
            'password' =>
                '$2a$12$k4pz5YdA6qIHHWKeoahDguFn6iOGXYDBRlYV3Q1HCgYY/6TwVWU5y',
            'role_id' => 3,
        ]);
    }
}
