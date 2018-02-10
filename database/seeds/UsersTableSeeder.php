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
    }
}
