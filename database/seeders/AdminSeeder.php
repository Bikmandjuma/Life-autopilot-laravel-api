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
                'professionalism' => 'Developer',
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'password'  => Hash::make('bugarama'),
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
        ]);
        
    }
}
