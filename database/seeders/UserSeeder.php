<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $visitor = User::create([
            'name' => 'sommi',
            'email' => 'sommi@mail.ru',
            'password' => Hash::make('sommi19'),
        ]);
        $visitor->assignRole('visitor');

        $curator = User::create([
            'name' => 'themaison',
            'email' => 'themaison@mail.ru',
            'password' => Hash::make('themaison'),
        ]);
        $curator->assignRole('curator');
    }
}
