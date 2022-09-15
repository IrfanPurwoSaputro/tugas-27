<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyanyiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penyanyi = [
            ['nama_penyanyi' => 'Iwan Fals'],
            ['nama_penyanyi' => 'Justin Bieber'],
            ['nama_penyanyi' => 'Bruno Mars'],
        ];
    }
}
