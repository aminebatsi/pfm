<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@admin.com',
                'role'=>'admin',
               'password'=> bcrypt('123'),
            ],
            [
               'name'=>'User',
               'email'=>'user@user.com',
                'role'=>'user',
               'password'=> bcrypt('123'),
            ],
            [
               'name'=>'guest',
               'email'=>'guest@guest.com',
                'role'=>'guest',
               'password'=> bcrypt('123'),
            ],
            [
                'name'=>'Admin',
                'email'=>'admin1@admin.com',
                 'role'=>'admin',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'User',
                'email'=>'user2@user.com',
                 'role'=>'user',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'Admin',
                'email'=>'admin2@admin.com',
                 'role'=>'admin',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'User',
                'email'=>'user3@user.com',
                 'role'=>'user',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'Admin',
                'email'=>'admin4@admin.com',
                 'role'=>'admin',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'User',
                'email'=>'user5@user.com',
                 'role'=>'user',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'Admin',
                'email'=>'admin5@admin.com',
                 'role'=>'admin',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'User',
                'email'=>'user6@user.com',
                 'role'=>'user',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'Admin',
                'email'=>'admin6@admin.com',
                 'role'=>'admin',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'User',
                'email'=>'user7@user.com',
                 'role'=>'user',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'Admin',
                'email'=>'admin7@admin.com',
                 'role'=>'admin',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'User',
                'email'=>'user8@user.com',
                 'role'=>'user',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'Admin',
                'email'=>'admin8@admin.com',
                 'role'=>'admin',
                'password'=> bcrypt('123'),
             ],
             [
                'name'=>'User',
                'email'=>'user9@user.com',
                 'role'=>'user',
                'password'=> bcrypt('123'),
             ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
