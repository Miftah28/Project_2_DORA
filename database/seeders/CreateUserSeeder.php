<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'role' => 0
            ],
            [
                'name' => 'masyarakat',
                'email' => 'masyarakat@example.com',
                'password' => bcrypt('password'),
                'role' => 1
            ]
        ];
        foreach($users as $user){
            User::create($user);
        };
    }
}
