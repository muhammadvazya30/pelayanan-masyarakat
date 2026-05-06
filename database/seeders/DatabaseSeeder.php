<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
         $faker = Faker::create('id_ID');

        for ($i = 0; $i < 500; $i++) {
            Masyarakat::create([
                'nomor_kk' => $faker->randomNumber(),
                'nomor_ktp' => $faker->randomNumber(),
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
            ]);
        }
}
}