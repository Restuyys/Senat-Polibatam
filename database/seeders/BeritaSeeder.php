<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beritas')->insert([
            'judul_berita' => 'pemilihan direktur 2 di politeknik negeri batam',
            'isi_berita' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum, incidunt perspiciatis labore consectetur eos amet magnam libero ab error laborum nisi excepturi iure, aut itaque corporis nemo fugit doloremque cum sunt magni quis vero modi iusto delectus. Necessitatibus vitae fugit cum magni quam natus, id ut qui exercitationem perferendis laudantium laborum. Possimus in eaque atque molestias eius error perspiciatis temporibus, officia corporis perferendis ipsam nesciunt et quas numquam tenetur unde dolor reiciendis exercitationem, pariatur iusto quos nostrum quibusdam at quo? Praesentium at, nihil minus porro maiores in beatae distinctio voluptas aperiam! Quo omnis assumenda, sint modi iure deleniti voluptas repellendus.',
            'gambar_berita' => '',
        ]);
    }
}
