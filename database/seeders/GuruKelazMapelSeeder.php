<?php

namespace Database\Seeders;

use App\Models\GuruKelazMapel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruKelazMapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Guru Guswika Mengajar Biologi di X MIPA 1-3
        DB::table('guru_kelaz_mapels')->insert([
            ['guru_id' => 1, 'kelaz_id' => 1, 'mapel_id' => 8],
            ['guru_id' => 1, 'kelaz_id' => 2, 'mapel_id' => 8],
            ['guru_id' => 1, 'kelaz_id' => 3, 'mapel_id' => 8],
        ]);

        // Guru Royan Mengajar PENJAS di X MIPA 1-3
        DB::table('guru_kelaz_mapels')->insert([
            ['guru_id' => 3, 'kelaz_id' => 1, 'mapel_id' => 5],
            ['guru_id' => 3, 'kelaz_id' => 2, 'mapel_id' => 5],
            ['guru_id' => 3, 'kelaz_id' => 3, 'mapel_id' => 5],
        ]);

        // Guru Yunia Mengajar Bahasa Inggris di X MIPA 1-3
        DB::table('guru_kelaz_mapels')->insert([
            ['guru_id' => 4, 'kelaz_id' => 1, 'mapel_id' => 4],
            ['guru_id' => 4, 'kelaz_id' => 2, 'mapel_id' => 4],
            ['guru_id' => 4, 'kelaz_id' => 3, 'mapel_id' => 4],
        ]);
    }
}
