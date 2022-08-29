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

        Angkatan::create([
            'tahun' => '2022'
        ]);
        
        Soal::create([
            'soal' => 'Burger and French Fries ___ my favorite foods.',
            'ujian_id' => 1,
        ]);
        
        Soal::create([
            'soal' => 'Do ___ ___ at least once a week?',
            'ujian_id' => 1,
        ]);

        Soal::create([
            'soal' => 'Does ___ ___ math for the test?',
            'ujian_id' => 1,
        ]);

        Soal::create([
            'soal' => 'My brother and I ___ mount Arjuno this holiday.',
            'ujian_id' => 1,
        ]);

        Soal::create([
            'soal' => 'The students ___ not ___ the assignment, so they got D.',
            'ujian_id' => 1,
        ]);

        Jawaban::create([
            'jawaban' => 'Is',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 1,
        ]);

        Jawaban::create([
            'jawaban' => 'Are',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 1,
        ]);

        Jawaban::create([
            'jawaban' => 'Does',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 1,
        ]);

        Jawaban::create([
            'jawaban' => 'Do',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 1,
        ]);
    }
}
