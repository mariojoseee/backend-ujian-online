<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Angkatan;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Kelaz;
use App\Models\Mapel;
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
            'nuptk' => '1915323100180501',
            'email' => 'mariojose@gmail.com',
            'password' => bcrypt('12345678'),
            'nama' => 'I Made Mario Jose Valentino',
            'level' => 'admin',
            'no_telp' => '081981716155',
        ]);

        Admin::create([
            'nuptk' => '1915323052070900',
            'email' => 'kevinarya@gmail.com',
            'password' => bcrypt('12345678'),
            'nama' => 'Ketut Kevin Arya Baskara',
            'level' => 'admin',
            'no_telp' => '082132130954',
        ]);

        Guru::create([
            'nuptk' => '8767613240986123',
            'email' => 'aguswika@gmail.com',
            'password' => bcrypt('12345678'),
            'nama' => 'I Wayan Agus Wika Sedana, S.Pd., M.Pd.',
            'level' => 'guru',
            'no_telp' => '089876761377',
            'admin_id' => 1
        ]);

        Guru::create([
            'nuptk' => '6512453893876450',
            'email' => 'sonypratama@gmail.com',
            'password' => bcrypt('12345678'),
            'nama' => 'I Putu Sony Adi Pratama, S.Si., M.Si.',
            'level' => 'guru',
            'no_telp' => '085413241391',
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
            'jurusan_id' => '3',
            'angkatan_id' => '1',
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X IBB 2',
            'jurusan_id' => '3',
            'angkatan_id' => '1',
        ]);

        Kelaz::create([
            'nama_kelaz' => 'X IBB 3',
            'jurusan_id' => '3',
            'angkatan_id' => '1',
        ]);

        Mapel::create([
            'nama_mapel' => 'Sastra Indonesia',
        ]);

        Mapel::create([
            'nama_mapel' => 'Sastra Inggris',
        ]);

        Mapel::create([
            'nama_mapel' => 'Antropologi',
        ]);

        Mapel::create([
            'nama_mapel' => 'Biologi',
        ]);

        Mapel::create([
            'nama_mapel' => 'Fisika',
        ]);

        Mapel::create([
            'nama_mapel' => 'Ekonomi',
        ]);
    }
}
