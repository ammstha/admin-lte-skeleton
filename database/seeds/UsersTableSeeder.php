<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
                'name' => 'Amrit Shrestha',
                'email' => 'amrit@admin.com',
                'password' => bcrypt('test456')
            ],
            [
                'name' => 'restaurant',
                'email' => 'restaurant@admin.com',
                'password' => bcrypt('test456')
            ]
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}
