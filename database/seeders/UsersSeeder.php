<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Users = User::create([
            'name' => 'admin',
            'phone' => '0900000000',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);
        $Users = User::create([
            'name' => '柚子',
            'phone' => '0963193137',
            'email' => 'a2340500789@gmail.com',
            'password' => Hash::make('0000000000'),
        ]);
        $Users = User::create([
            'name' => 'yoyo',
            'phone' => '0966408765',
            'email' => 'samuel20020930@gmail.com',
            'password' => Hash::make('910930'),
        ]);
    }
}
