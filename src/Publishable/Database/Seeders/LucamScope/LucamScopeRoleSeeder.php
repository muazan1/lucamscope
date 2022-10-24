<?php

namespace Database\Seeders\Lucamscope;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use DB;

use Illuminate\Database\Seeder;

class LucamScopeRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 3,
            'name' => 'temp',
        ]);
    }
}
