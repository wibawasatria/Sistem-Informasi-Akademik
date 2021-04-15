<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 100; //batasan berapa banyak data

        for ($i = 0; $i < $limit; $i++) {
            DB::table('siswa')->insert([ //mengisi datadi database
                'nis' => "123",
                'nisn' => "123",
                'nama_siswa' => $faker->name,
                'password' => $faker->address,
            ]);
        }
    }
}
