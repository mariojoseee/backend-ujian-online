<?php

namespace Database\Seeders;

use App\Models\Kelaz;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelazSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelaz::create([
            'nama_kelaz' => 'X MIPA 1',
            'jurusan_id' => '1',
            'angkatan_id' => '1',
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X MIPA 2',
            'jurusan_id' => '1',
            'angkatan_id' => '1',
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X MIPA 3',
            'jurusan_id' => '1',
            'angkatan_id' => '1',
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X IPS 1',
            'jurusan_id' => '2',
            'angkatan_id' => '1',
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X IPS 2',
            'jurusan_id' => '2',
            'angkatan_id' => '1',
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X IPS 3',
            'jurusan_id' => '2',
            'angkatan_id' => '1',
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X IBB 1',
            'jurusan_id' => '3',
            'angkatan_id' => '1',
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X IBB 2',
            'jurusan_id' => '3',
            'angkatan_id' => '1',
        ]);
    }
}
