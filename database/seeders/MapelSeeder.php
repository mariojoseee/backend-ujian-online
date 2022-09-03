<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // MAPEL UMUM
        Mapel::create([
            'nama_mapel' => 'Pendidikan Agama dan Budi Pekerti',
        ]);
        Mapel::create([
            'nama_mapel' => 'Pendidikan Pancasila dan Kewarganegaraaan',
        ]);
        Mapel::create([
            'nama_mapel' => 'Bahasa Indonesia',
        ]);
        Mapel::create([
            'nama_mapel' => 'Bahasa Inggris',
        ]);
        Mapel::create([
            'nama_mapel' => 'Pendidikan Jasmani, Olahraga, dan Kesehatan',
        ]);
        Mapel::create([
            'nama_mapel' => 'Sejarah Indonesia',
        ]);
        Mapel::create([
            'nama_mapel' => 'Matematika Wajib',
        ]);

        // MAPEL JURUSAN MIPA
        Mapel::create([
            'nama_mapel' => 'Biologi',
        ]);
        Mapel::create([
            'nama_mapel' => 'Fisika',
        ]);
        Mapel::create([
            'nama_mapel' => 'Kimia',
        ]);

        // MAPEL JURUSAN IPS
        Mapel::create([
            'nama_mapel' => 'Sosiologi',
        ]);
        Mapel::create([
            'nama_mapel' => 'Geografi',
        ]);
        Mapel::create([
            'nama_mapel' => 'Ekonomi',
        ]);

        // MAPEL JURUSAN BAHASA
        Mapel::create([
            'nama_mapel' => 'Sastra Indonesia',
        ]);
        Mapel::create([
            'nama_mapel' => 'Antropologi',
        ]);
        Mapel::create([
            'nama_mapel' => 'Sastra Inggris',
        ]);
        Mapel::create([
            'nama_mapel' => 'Sastra Indonesia',
        ]);
    }
}
