<?php

namespace Database\Seeders;

use App\Models\Angkatan;
use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Siswa::factory(20)->create();

        $this->call(AdminSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(KelazSeeder::class);
        $this->call(MapelSeeder::class);

        Angkatan::create([
            'tahun' => '2022'
        ]);
    }
}
