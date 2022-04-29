<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); 
           $users = [ 
            [ 
              'name' => 'Admin',
              'email' => 'admin@gmail.com',
              'password' => '123456',
              'is_admin' => true,
            ],
            [
              'name' => 'User',
              'email' => 'user@gmail.com',
              'password' => '13456',
              'is_admin' => false,
            ],
             [
              'name' => 'Client',
              'email' => 'client@gmail.com',
              'password' => '13456',
              'is_admin' => false,
            ] 
          ];

          foreach($users as $user)
          {
              User::create([
               'name' => $user['name'],
               'email' => $user['email'],
               'password' => Hash::make($user['password'])
             ]);
           }
    }
}
