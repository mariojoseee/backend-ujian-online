<?php

namespace Database\Seeders;

use App\Models\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guru::create([
            'nuptk' => '5102011915323080',
            'email' => 'aguswika@gmail.com',
            'password' => bcrypt('12345678'),
            'nama' => 'I Wayan Agus Wika Sedana, S.Pd., M.Pd.',
            'level' => 'guru',
            'no_telp' => '08' . mt_rand(1000000000, 9999999999),
            'admin_id' => mt_rand(1,2),
        ]);

        Guru::create([
            'nuptk' => '5102011915323072',
            'email' => 'sonypratama@gmail.com',
            'password' => bcrypt('12345678'),
            'nama' => 'I Putu Sony Adi Pratama, S.Si., M.Si.',
            'level' => 'guru',
            'no_telp' => '08' . mt_rand(1000000000, 9999999999),
            'admin_id' => mt_rand(1,2),
        ]);

        Guru::create([
            'nuptk' => '5102011915323044',
            'email' => 'royanfauzan@gmail.com',
            'password' => bcrypt('12345678'),
            'nama' => 'Royan Fauzan, S.Kom., M.Kom., Ph.D.',
            'level' => 'guru',
            'no_telp' => '08' . mt_rand(1000000000, 9999999999),
            'admin_id' => mt_rand(1,2),
        ]);

        Guru::create([
            'nuptk' => '5102011915323008',
            'email' => 'yunianurcahyani@gmail.com',
            'password' => bcrypt('12345678'),
            'nama' => 'Ni Putu Yunia Nurcahyani, S.S., M.S.',
            'level' => 'guru',
            'no_telp' => '08' . mt_rand(1000000000, 9999999999),
            'admin_id' => mt_rand(1,2),
        ]);

        Guru::create([
            'nuptk' => '5102011915323112',
            'email' => 'evapramesti@gmail.com',
            'password' => bcrypt('12345678'),
            'nama' => 'Ni Made Dwi Eva Pramesti, S.Kes., M.Kes.',
            'level' => 'guru',
            'no_telp' => '08' . mt_rand(1000000000, 9999999999),
            'admin_id' => mt_rand(1,2),
        ]);
    }
}
