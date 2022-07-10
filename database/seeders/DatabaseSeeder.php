<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Angkatan;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Kelaz;
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
        Admin::create([
            'nama' => 'I Made Mario Jose Valentino',
            'email' => 'mariojose@gmail.com',
            'password' => bcrypt('12345678'),
            'no_ktp' => '1915323100180501',
            'level' => 'admin',
        ]);

        Admin::create([
            'nama' => 'Ketut Kevin Arya Baskara',
            'email' => 'kevinarya@gmail.com',
            'password' => bcrypt('12345678'),
            'no_ktp' => '1915323052070900',
            'level' => 'admin',
        ]);

        Guru::create([
            'nama' => 'I Wayan Agus Wika Sedana, S.Pd., M.Pd.',
            'email' => 'aguswika@gmail.com',
            'password' => bcrypt('12345678'),
            'no_ktp' => '8767613240986123',
            'level' => 'guru',
            'admin_id' => 1
        ]);

        Guru::create([
            'nama' => 'I Putu Sony Adi Pratama, S.Si., M.Si.',
            'email' => 'sonypratama@gmail.com',
            'password' => bcrypt('12345678'),
            'no_ktp' => '6512453893876450',
            'level' => 'guru',
            'admin_id' => 2
        ]);

        Angkatan::create([
            'tahun' => '2020'
        ]);

        Angkatan::create([
            'tahun' => '2021'
        ]);

        Angkatan::create([
            'tahun' => '2022'
        ]);

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

        Kelaz::create([
            'nama_kelaz' => 'X IBB 1',
            'jurusan_id' => '3'
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X IBB 2',
            'jurusan_id' => '3'
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X IBB 3',
            'jurusan_id' => '3'
        ]);
    }
}
