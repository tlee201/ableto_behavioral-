<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            // testing login with a default user
            User::create([
            	'username' => 'Tony',
            	'email'    => 'tonylee391@gmail.com',
            	'password' => \Hash::make('crystal2') 
            ]);
    }
}
