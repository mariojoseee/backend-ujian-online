<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Soal;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Ujian;
use App\Models\Jawaban;
use App\Models\Angkatan;
use App\Models\Nilai;
use Database\Factories\Siswa2Factory;
use Database\Factories\Siswa3Factory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Siswa::factory(18)->create();

        $this->call(AdminSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(KelazSeeder::class);
        $this->call(MapelSeeder::class);
        $this->call(UjianSeeder::class);
        $this->call(GuruKelazMapelSeeder::class);
        $this->call(NilaiSeeder::class);
        $this->call(SoalBiologiSeeder::class);
        $this->call(JawabanBiologiSeeder::class);

        Angkatan::create([
            'tahun' => '2022'
        ]);
    }
}
