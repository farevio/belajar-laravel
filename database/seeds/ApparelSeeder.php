<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApparelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apparels')->insert([
            'nama' => 'Baju',
            'jenis' => 'Atasan',
            'gambar' => 'atas1.jpg',
        ]);

        DB::table('apparels')->insert([
            'nama' => 'Celana',
            'jenis' => 'Bawahan',
            'gambar' => 'bwh1.jpg',
        ]);

        DB::table('apparels')->insert([
            'nama' => 'Tas',
            'jenis' => 'Aksesoris',
            'gambar' => '1.png',
        ]);
    }
}
