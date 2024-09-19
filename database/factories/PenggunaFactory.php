<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker =  \Faker\Factory::create('id_ID');
        $username = $faker->firstName();
        return [
            'username' => strtolower($username),
            'password' => '$2y$10$u/tFVG9vElYZ8PMCezJPlu0FmkERj3PyJgsJfFxyfo1vujZ953mqi', //password
            'nip' => 0,
            'nama' => $username,
            'profesi' => 2,
            'aktif' => 1
        ];
    }
}
