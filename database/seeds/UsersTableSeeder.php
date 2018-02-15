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
         $user = User::create([
            'name' => 'Marcos Echevarria',
            'email' => 'quinho@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 1,
        ]);

        $user = User::create([
            'name' => 'Guto Muniz',
            'email' => 'augustomuniz1@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 1,
        ]);

        $user = User::create([
            'name' => 'Fábio Lopes',
            'email' => 'fzlopes1@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 1,
        ]);

       
        $user = User::create([
            'name' => 'Village 1',
            'email' => 'village1@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 0,
        ]);

        $user = User::create([
            'name' => 'Rádios que quero ouvir',
            'email' => 'radiosquequeroouvir@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 0,
        ]);

        $user = User::create([
            'name' => 'Joker',
            'email' => 'joker@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 0,
        ]);

        $user = User::create([
            'name' => 'Objetivo',
            'email' => 'objetivor@gmail.com',
            'password' => bcrypt('123456'),
            'admin' => 0,
        ]);
    }
}
