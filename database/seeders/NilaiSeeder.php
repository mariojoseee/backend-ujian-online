<?php

namespace Database\Seeders;

use App\Models\Nilai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Data Laporan Nilai UTS Ganjil Siswa Kelas X MIPA 1 Mapel Fisika
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 1,
            'ujian_id' => 1,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 2,
            'ujian_id' => 1,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 3,
            'ujian_id' => 1,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 4,
            'ujian_id' => 1,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 5,
            'ujian_id' => 1,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 6,
            'ujian_id' => 1,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 7,
            'ujian_id' => 1,
        ]);


        // Data Laporan Nilai UAS Ganjil Siswa Kelas X MIPA 1 Mapel Fisika
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 1,
            'ujian_id' => 2,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 2,
            'ujian_id' => 2,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 3,
            'ujian_id' => 2,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 4,
            'ujian_id' => 2,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 5,
            'ujian_id' => 2,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 6,
            'ujian_id' => 2,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 7,
            'ujian_id' => 2,
        ]);


        // Data Laporan Nilai UTS Genap Siswa Kelas X MIPA 1 Mapel Fisika
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 1,
            'ujian_id' => 3,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 2,
            'ujian_id' => 3,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 3,
            'ujian_id' => 3,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 4,
            'ujian_id' => 3,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 5,
            'ujian_id' => 3,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 6,
            'ujian_id' => 3,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 7,
            'ujian_id' => 3,
        ]);


        // Data Laporan Nilai UAS Genap Siswa Kelas X MIPA 1 Mapel Fisika
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 1,
            'ujian_id' => 4,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 2,
            'ujian_id' => 4,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 3,
            'ujian_id' => 4,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 4,
            'ujian_id' => 4,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 5,
            'ujian_id' => 4,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 6,
            'ujian_id' => 4,
        ]);
        Nilai::create([
            'nilai' => mt_rand(70, 100),
            'siswa_id' => 7,
            'ujian_id' => 4,
        ]);
    }
}
