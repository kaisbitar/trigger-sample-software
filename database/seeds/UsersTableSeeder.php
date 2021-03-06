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
            'name' => 'Erik Anderson',
            'email' => 'Erik@LeadersInternational.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('users')->insert([
            'name' => 'Dean Rud',
            'email' => 'drud@trgr.ca',
            'password' => bcrypt('secret'),
        ]);
    }
} 
