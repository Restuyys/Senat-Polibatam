<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AspirasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('aspirasis')->insert([
            'tanggal' => '2022-06-13',
            'waktu' => '13:12:12',
            'judul_aspirasi' => 'Mahasiswa lelah',
            'uk_tujuan' => 'Pudir 3',
            'isi_aspirasi' => 'Lorem ipsum dolor sit cum ipsam amet. Officiis accusantium saepe doloribus voluptatem?',
        ]); //
    }
}
