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
        // UTS GANJIL BIOLOGI
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
        // UAS GANJIL BIOLOGI
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

        // UTS GENAP BIOLOGI
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
        // UAS GENAP BIOLOGI
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


        // UTS GANJIL SASTRA INGGRIS
        Ujian::create([
            'jenis' => 'Ujian Tengah Semester (UTS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Ganjil',
            'status' => 'Nonaktif',
            'waktu' => '01:00:00',
            'mapel_id' => 16,
            'guru_id' => 4,
        ]);
        // UAS GANJIL SASTRA INGGRIS
        Ujian::create([
            'jenis' => 'Ujian Akhir Semester (UAS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Ganjil',
            'status' => 'Nonaktif',
            'waktu' => '00:40:00',
            'mapel_id' => 16,
            'guru_id' => 4,
        ]);

        // UTS GENAP SASTRA INGGRIS
        Ujian::create([
            'jenis' => 'Ujian Tengah Semester (UTS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Genap',
            'status' => 'Nonaktif',
            'waktu' => '00:40:00',
            'mapel_id' => 16,
            'guru_id' => 4,
        ]);
        // UAS GENAP SASTRA INGGRIS
        Ujian::create([
            'jenis' => 'Ujian Akhir Semester (UAS)',
            'deskripsi' => 'Pilihlah jawaban yang paling benar pada salah satu huruf a, b, c, atau d !',
            'kode_ujian' => 'KD' . mt_rand(11111111, 99999999),
            'semester' => 'Genap',
            'status' => 'Nonaktif',
            'waktu' => '00:45:00',
            'mapel_id' => 16,
            'guru_id' => 4,
        ]);
    }
}
