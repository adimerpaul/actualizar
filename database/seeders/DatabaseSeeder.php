<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(['name'=>'admin','email'=>'admin@gmail.com','password'=>Hash::make('admin')]);
        // \App\Models\User::factory(10)->create();
    }
}
