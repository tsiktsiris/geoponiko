<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Demo User",
            'email' => 'demo@mail.gr',
            'password' => bcrypt('demo'),
            'role' => 2,
            'status' => 0
        ]);
    }
}
