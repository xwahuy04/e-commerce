<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'admin@example.com')->first();
        if (!$user) {

            $user = new User();
        }
        $user->name = 'admin';
        $user->email = 'admin@example.com';
        $user->role = 1;
        $user->password = Hash::make('e-commerce_@adminwahyu');
        $user->save();

        
    }
}
