<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Pengguna::truncate();
        Pengguna::create([
            'username' => 'superuser',
            'password' => Hash::make('password'),
            'nip' => 0,
            'nama' => 'Administrator',
            'profesi' => 1,
            'aktif' => 1
        ]);
        Pengguna::factory(40)->create();
    }
}
