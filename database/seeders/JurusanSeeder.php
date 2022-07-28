<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
