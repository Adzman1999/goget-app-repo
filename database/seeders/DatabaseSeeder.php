<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    // public function run()
    // {
    //     $this->call(UsersTableSeeder::class);
    //     $this->call(SettingTableSeeder::class);
    //     $this->call(CouponSeeder::class);
    // }

    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'status' => 'active'
        ], [
            'email' => 'user@user.com',
            'name' => 'User',
            'password' =>
            bcrypt('password'),
            'role' => 'user',
            'status' => 'active'
        ]);
    }
}
