<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        User::create([
            'name' => 'Demo User',
            'email' => 'demo@example.org',
            'email_verified_at' => now(),
            'password' => bcrypt('secret'),
        ]);
    }
}
