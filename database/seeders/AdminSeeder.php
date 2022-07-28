<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
            'no_telp' => '08' . mt_rand(1000000000, 9999999999),
        ]);

        Admin::create([
            'nuptk' => '1915323052070900',
            'email' => 'kevinarya@gmail.com',
            'password' => bcrypt('12345678'),
            'nama' => 'Ketut Kevin Arya Baskara',
            'level' => 'admin',
            'no_telp' => '08' . mt_rand(1000000000, 9999999999),
        ]);
    }
}
