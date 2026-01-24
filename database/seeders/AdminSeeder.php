<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::insert([
            [
                'firstname' => 'Bikman',
                'lastname'  => 'Djuma',
                'gender'    => 'male',
                'email'     => 'bikmangeek@gmail.com',
                'country'   => 'Rwanda',
                'phone'     => '0785389000',
                'image'     => 'user.png',
                'birthdate' => '2000-12-20',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'password'  => Hash::make('bugarama'),
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'firstname' => 'user2',
                'lastname'  => 'user2',
                'gender'    => 'male',
                'email'     => 'user2@gmail.com',
                'country'   => 'Rwanda',
                'phone'     => '0781111132',
                'image'     => 'user2.png',
                'birthdate' => '1998-05-15',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'password'  => Hash::make('password'),
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'firstname' => 'user2',
                'lastname'  => 'user2',
                'gender'    => 'male',
                'email'     => 'user2@gmail.com',
                'country'   => 'Rwanda',
                'phone'     => '0712345670',
                'image'     => 'user3.png',
                'birthdate' => '2001-03-10',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'password'  => Hash::make('password'),
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
        ]);
    }
}
