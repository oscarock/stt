<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         DB::table('users')->insert([
            'name' => 'Oscar',
            'last_name' => 'Diaz',
            'civil_status' => 'single',
            'birth_date' => '1991-01-17',
            'salary' => 500000,
            'email' => 'prueba@prueba.com',
            'department' => 'Bogota D.C',
            'town' => 'Bogota D.C',
            'password' => Hash::make(123456);
        ]);
    }
}
