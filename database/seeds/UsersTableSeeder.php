<?php

use App\User;
use Carbon\Carbon;
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
     foreach (Helpers::USERS as $index => $user) {
       User::create([
          'name' => $user['name'],
          'email' => $user['email'],
          'password' => bcrypt('secret'),
      ]);
     }
    }
}