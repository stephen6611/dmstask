<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Penduduk;
class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penduduk::create([
            'name'=> 'Penduduk',
            'username'=> 'penduduk',
            'email'=> 'penduduk@email.com',
            'password'=> Hash::make('12345')
        ]);
        Penduduk::create([
            'name'=> 'Roses',
            'username'=> 'roses',
            'email'=> 'roses@email.com',
            'password'=> Hash::make('12345')
        ]);
    }
}