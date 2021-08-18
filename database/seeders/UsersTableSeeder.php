<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'test2',
            'email' => 'test2@gmail.com',
            'password' => 'test1234',
            'remember_token' => Str::random(60)
        ]);
    }
}
