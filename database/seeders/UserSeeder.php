<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Voeg een voorbeeldgebruiker toe
        DB::table('users')->insert([
            'name' => 'Voorbeeld Gebruiker',
            'email' => 'voorbeeld@example.com',
            'password' => Hash::make('wachtwoord'),
        ]);

        // Voeg meer gebruikers toe indien nodig
        // DB::table('users')->insert([
        //     'name' => 'Naam van de Gebruiker',
        //     'email' => 'e-mail@voorbeeld.com',
        //     'password' => Hash::make('wachtwoord'),
        // ]);
    }
}
