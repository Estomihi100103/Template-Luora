<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    //admin
    DB::table('users')->insert([
      'name' => 'admin',
      'name_slug' => 'admin',
      'email' => 'admin@gmail.com',
      'email_verified_at' => now(),
      'password' => bcrypt('admin@gmail.com'), // password
      'remember_token' => Str::random(10),
      'role' => 'admin',
      'avatar' => 'https://ui-avatars.com/api/?name=admin&background=868e96&color=fff',
    ]);
  }
}
