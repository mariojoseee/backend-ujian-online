<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'nama_jurusan' => 'Matematika dan Ilmu Pengetahuan Alam',
            'singkatan' => 'MIPA'
        ]);

        Jurusan::create([
            'nama_jurusan' => 'Ilmu Pengetahuan Sosial',
            'singkatan' => 'IPS'
        ]);
        
        Jurusan::create([
            'nama_jurusan' => 'Ilmu Bahasa dan Budaya',
            'singkatan' => 'IBB'
        ]);
    }
}
