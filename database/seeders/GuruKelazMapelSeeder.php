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
        // Guru ID 1
        DB::table('guru_kelaz_mapels')->insert([
            ['guru_id' => 1, 'kelaz_id' => 1, 'mapel_id' => 7],
            ['guru_id' => 1, 'kelaz_id' => 2, 'mapel_id' => 7],
            ['guru_id' => 1, 'kelaz_id' => 3, 'mapel_id' => 7],
        ]);

        // Guru ID 3
        DB::table('guru_kelaz_mapels')->insert([
            ['guru_id' => 3, 'kelaz_id' => 4, 'mapel_id' => 5],
            ['guru_id' => 3, 'kelaz_id' => 5, 'mapel_id' => 5],
            ['guru_id' => 3, 'kelaz_id' => 6, 'mapel_id' => 5],
        ]);

        // Guru ID 4
        DB::table('guru_kelaz_mapels')->insert([
            ['guru_id' => 4, 'kelaz_id' => 1, 'mapel_id' => 4],
            ['guru_id' => 4, 'kelaz_id' => 2, 'mapel_id' => 4],
            ['guru_id' => 4, 'kelaz_id' => 3, 'mapel_id' => 4],
        ]);
    }
}
