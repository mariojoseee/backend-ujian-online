<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Soal;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Ujian;
use App\Models\Jawaban;
use App\Models\Angkatan;
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
        Siswa::factory(20)->create();

        $this->call(AdminSeeder::class);
        $this->call(GuruSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(KelazSeeder::class);
        $this->call(MapelSeeder::class);

        Angkatan::create([
            'tahun' => '2022'
        ]);

        Ujian::create([
            'jenis' => 'Ujian Tengah Semester (UTS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kelas' => 'X',
            'semester' => 'Ganjil',
            'status' => 'Nonaktif',
            'mapel_id' => 4,
            'guru_id' => 4,
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
            'soal_id' => 1,
        ]);

        Jawaban::create([
            'jawaban' => 'Are',
            'keterangan' => 'Benar',
            'soal_id' => 1,
        ]);

        Jawaban::create([
            'jawaban' => 'Does',
            'keterangan' => 'Salah',
            'soal_id' => 1,
        ]);

        Jawaban::create([
            'jawaban' => 'Do',
            'keterangan' => 'Salah',
            'soal_id' => 1,
        ]);
    }
}
