<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nis' => $this->faker->unique()->randomNumber(5, true),
            'email' => $this->faker->unique()->freeEmail(),
            'password' => bcrypt('12345678'),
            'nama' => $this->faker->name(),
            'no_telp' => '08' . $this->faker->unique()->numberBetween(1000000000, 9999999999),
            'kelaz_id' => mt_rand(1,8),
            'admin_id' => mt_rand(1,2),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }
}
