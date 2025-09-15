<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; //importando o model user

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Alan',
            'lastName' => 'Góes',
            'email' => 'alan@email.com',
            'password' => bcrypt('12345678'), //criptografando a senha
        ]);
    }
}
