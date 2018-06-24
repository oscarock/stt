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
            'password' => Hash::make(123456)
        ]);

        DB::table('departments')->insert([
            'name' => 'ATLÁNTICO'
        ]);

        DB::table('departments')->insert([
            'name' => 'BOGOTÁ, D.C.'
        ]);

        DB::table('departments')->insert([
            'name' => 'BOYACÁ'
        ]); 

        DB::table('departments')->insert([
            'name' => 'META'
        ]);

        DB::table('towns')->insert([
            'name' => 'Baranoa',
            'department_id' => 1
        ]);

        DB::table('towns')->insert([
            'name' => 'Campo de la Cruz',
            'department_id' => 1
        ]);

        DB::table('towns')->insert([
            'name' => 'Soledad',
            'department_id' => 1
        ]);

        DB::table('towns')->insert([
            'name' => 'Palmar de Varela',
            'department_id' => 1
        ]);

        DB::table('towns')->insert([
            'name' => 'Santo Tomás',
            'department_id' => 1
        ]);

        DB::table('towns')->insert([
            'name' => 'Suan',
            'department_id' => 1
        ]);

        DB::table('towns')->insert([
            'name' => 'Puerto Colombia',
            'department_id' => 1
        ]);

        DB::table('towns')->insert([
            'name' => 'Manatí',
            'department_id' => 1
        ]);

        DB::table('towns')->insert([
            'name' => 'Ponedera',
            'department_id' => 1
        ]);

        DB::table('towns')->insert([
            'name' => 'Bogotá D.C.',
            'department_id' => 2
        ]);

        DB::table('towns')->insert([
            'name' => 'Almeida',
            'department_id' => 3
        ]);

        DB::table('towns')->insert([
            'name' => 'Belén',
            'department_id' => 3
        ]);

        DB::table('towns')->insert([
            'name' => 'Briceño',
            'department_id' => 3
        ]);

        DB::table('towns')->insert([
            'name' => 'Cerinza',
            'department_id' => 3
        ]);

        DB::table('towns')->insert([
            'name' => 'Cubará',
            'department_id' => 3
        ]);

        DB::table('towns')->insert([
            'name' => 'Cómbita',
            'department_id' => 3
        ]);

        DB::table('towns')->insert([
            'name' => 'Acacías',
            'department_id' => 4
        ]);

        DB::table('towns')->insert([
            'name' => 'Castilla la Nueva',
            'department_id' => 4
        ]);

        DB::table('towns')->insert([
            'name' => 'El Dorado',
            'department_id' => 4
        ]);

        DB::table('towns')->insert([
            'name' => 'Granada',
            'department_id' => 4
        ]);

        DB::table('towns')->insert([
            'name' => 'Mapiripan',
            'department_id' => 4
        ]);


    }
}
