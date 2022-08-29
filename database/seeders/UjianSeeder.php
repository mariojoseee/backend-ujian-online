<?php

namespace Database\Seeders;

use App\Models\Ujian;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // UTS GANJIL FISIKA
        Ujian::create([
            'jenis' => 'Ujian Tengah Semester (UTS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Ganjil',
            'status' => 'Nonaktif',
            'waktu' => '01:00:00',
            'mapel_id' => 8,
            'guru_id' => 1,
        ]);
        // UAS GANJIL FISIKA
        Ujian::create([
            'jenis' => 'Ujian Akhir Semester (UAS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Ganjil',
            'status' => 'Nonaktif',
            'waktu' => '00:40:00',
            'mapel_id' => 8,
            'guru_id' => 1,
        ]);

        // UTS GENAP FISIKA
        Ujian::create([
            'jenis' => 'Ujian Tengah Semester (UTS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Genap',
            'status' => 'Nonaktif',
            'waktu' => '00:40:00',
            'mapel_id' => 8,
            'guru_id' => 1,
        ]);
        // UAS GENAP FISIKA
        Ujian::create([
            'jenis' => 'Ujian Akhir Semester (UAS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Genap',
            'status' => 'Nonaktif',
            'waktu' => '00:45:00',
            'mapel_id' => 8,
            'guru_id' => 1,
        ]);

        // UTS GANJIL BAHASA INGGRIS
        Ujian::create([
            'jenis' => 'Ujian Tengah Semester (UTS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Ganjil',
            'status' => 'Nonaktif',
            'waktu' => '01:00:00',
            'mapel_id' => 4,
            'guru_id' => 4,
        ]);
        // UAS GANJIL BAHASA INGGRIS
        Ujian::create([
            'jenis' => 'Ujian Akhir Semester (UAS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Ganjil',
            'status' => 'Nonaktif',
            'waktu' => '00:40:00',
            'mapel_id' => 4,
            'guru_id' => 4,
        ]);

        // UTS GENAP BAHASA INGGRIS
        Ujian::create([
            'jenis' => 'Ujian Tengah Semester (UTS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Genap',
            'status' => 'Nonaktif',
            'waktu' => '00:40:00',
            'mapel_id' => 4,
            'guru_id' => 4,
        ]);
        // UAS GENAP BAHASA INGGRIS
        Ujian::create([
            'jenis' => 'Ujian Akhir Semester (UAS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Genap',
            'status' => 'Nonaktif',
            'waktu' => '00:45:00',
            'mapel_id' => 4,
            'guru_id' => 4,
        ]);
    }
}
