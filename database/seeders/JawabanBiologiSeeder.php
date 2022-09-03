<?php

namespace Database\Seeders;

use App\Models\Jawaban;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JawabanBiologiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Jawaban Soal 1
        Jawaban::create([
            'jawaban' => 'Produksi antibiotik',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 1,
        ]);
        Jawaban::create([
            'jawaban' => 'Bayi tabung',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 1,
        ]);
        Jawaban::create([
            'jawaban' => 'Teknik hibridisasi',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 1,
        ]);
        Jawaban::create([
            'jawaban' => 'Penemuan vaksin',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 1,
        ]);
        Jawaban::create([
            'jawaban' => 'Penemuan antibodi',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 1,
        ]);
        // Jawaban Soal 2
        Jawaban::create([
            'jawaban' => 'Memahami metode-metode ilmiah yang digunakan dalam ilmu Biologi',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 2,
        ]);
        Jawaban::create([
            'jawaban' => 'Mengumpulkan data dengan teliti',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 2,
        ]);
        Jawaban::create([
            'jawaban' => ' Melakukan eksperimen dan percobaan yang inovatif',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 2,
        ]);
        Jawaban::create([
            'jawaban' => ' Mengerti permasalahan yang ada dan punya penalaran yang kritis',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 2,
        ]);
        Jawaban::create([
            'jawaban' => 'Mengumpulkan fakta dengan cara mengamati',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 2,
        ]);
        // Jawaban Soal 3
        Jawaban::create([
            'jawaban' => 'Materi dan energi',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 3,
        ]);
        Jawaban::create([
            'jawaban' => 'Bahan-bahan kimia',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 3,
        ]);
        Jawaban::create([
            'jawaban' => 'Kehidupan di sekitar kita',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 3,
        ]);
        Jawaban::create([
            'jawaban' => 'Batu-batuan',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 3,
        ]);
        Jawaban::create([
            'jawaban' => 'Fosil-fosil makhluk hidup',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 3,
        ]);
        // Jawaban Soal 4
        Jawaban::create([
            'jawaban' => 'Meningkatnya hama serangga',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 4,
        ]);
        Jawaban::create([
            'jawaban' => 'Penemuan bibit unggul',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 4,
        ]);
        Jawaban::create([
            'jawaban' => 'Punahnya tanaman berkualitas rendah',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 4,
        ]);
        Jawaban::create([
            'jawaban' => 'Berkurangnya plasma nutfah',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 4,
        ]);
        Jawaban::create([
            'jawaban' => 'Matinya tanaman-tanaman langka',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 4,
        ]);
        // Jawaban Soal 5
        Jawaban::create([
            'jawaban' => 'Sistematis',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 5,
        ]);
        Jawaban::create([
            'jawaban' => 'Objektif',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 5,
        ]);
        Jawaban::create([
            'jawaban' => 'Verifikatif',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 5,
        ]);
        Jawaban::create([
            'jawaban' => 'Universal',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 5,
        ]);
        Jawaban::create([
            'jawaban' => 'Analitis',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 5,
        ]);
        // Jawaban Soal 6
        Jawaban::create([
            'jawaban' => 'Benda mati',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 6,
        ]);
        Jawaban::create([
            'jawaban' => 'Manusia',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 6,
        ]);
        Jawaban::create([
            'jawaban' => 'Tumbuhan',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 6,
        ]);
        Jawaban::create([
            'jawaban' => 'Hewan',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 6,
        ]);
        Jawaban::create([
            'jawaban' => 'Mikroorganisme',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 6,
        ]);
        // Jawaban Soal 7
        Jawaban::create([
            'jawaban' => 'Kimia',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 7,
        ]);
        Jawaban::create([
            'jawaban' => 'Filsafat',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 7,
        ]);
        Jawaban::create([
            'jawaban' => 'Sosial',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 7,
        ]);
        Jawaban::create([
            'jawaban' => 'Alam',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 7,
        ]);
        Jawaban::create([
            'jawaban' => 'Humaniora',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 7,
        ]);
        // Jawaban Soal 8
        Jawaban::create([
            'jawaban' => 'Kondisi geologis',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 8,
        ]);
        Jawaban::create([
            'jawaban' => 'Variasi iklim',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 8,
        ]);
        Jawaban::create([
            'jawaban' => 'Faktor kimia tanah',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 8,
        ]);
        Jawaban::create([
            'jawaban' => 'Letak astronomi',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 8,
        ]);
        Jawaban::create([
            'jawaban' => 'Faktor fisik tanah',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 8,
        ]);
        // Jawaban Soal 9
        Jawaban::create([
            'jawaban' => 'Kucing',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 9,
        ]);
        Jawaban::create([
            'jawaban' => 'Ayam',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 9,
        ]);
        Jawaban::create([
            'jawaban' => 'Bakteri',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 9,
        ]);
        Jawaban::create([
            'jawaban' => 'Kelinci',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 9,
        ]);
        Jawaban::create([
            'jawaban' => 'Jamur',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 9,
        ]);
        // Jawaban Soal 10
        Jawaban::create([
            'jawaban' => 'Penyebab tidak langsung',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 10,
        ]);
        Jawaban::create([
            'jawaban' => 'Penyebab secara langsung',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 10,
        ]);
        Jawaban::create([
            'jawaban' => 'Faktor buatan',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 10,
        ]);
        Jawaban::create([
            'jawaban' => 'Faktor alami',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 10,
        ]);
        Jawaban::create([
            'jawaban' => 'Faktor aktivitas manusia',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 10,
        ]);
        // Jawaban Soal 20
        Jawaban::create([
            'jawaban' => 'Gen',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 20,
        ]);
        Jawaban::create([
            'jawaban' => 'Spesies',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 20,
        ]);
        Jawaban::create([
            'jawaban' => 'Bioma',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 20,
        ]);
        Jawaban::create([
            'jawaban' => 'Ekosistem',
            'keterangan' => 'Benar',
            'skor' => 5,
            'soal_id' => 20,
        ]);
        Jawaban::create([
            'jawaban' => 'Biosfer',
            'keterangan' => 'Salah',
            'skor' => 0,
            'soal_id' => 20,
        ]);
    }
}
