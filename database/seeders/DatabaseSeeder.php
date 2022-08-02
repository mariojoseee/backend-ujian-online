<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\Siswa;
use App\Models\Ujian;
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
            'mapel_id' => 4,
            'guru_id' => 4,
        ]);
    }
}
