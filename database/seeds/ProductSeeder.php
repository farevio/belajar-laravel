<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'nama' => 'Atasan 1',
            'apparel_id' => 1,
            'harga' => 45000,
            'gambar' => 'atas1.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 2',
            'apparel_id' => 1,
            'harga' => 50000,
            'gambar' => 'atas2.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 3',
            'apparel_id' => 1,
            'harga' => 47500,
            'gambar' => 'atas3.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 4',
            'apparel_id' => 1,
            'harga' => 52500,
            'gambar' => 'atas4.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 5',
            'apparel_id' => 1,
            'harga' => 40000,
            'gambar' => 'atas5.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 6',
            'apparel_id' => 1,
            'harga' => 60000,
            'gambar' => 'atas6.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 7',
            'apparel_id' => 1,
            'harga' => 50000,
            'gambar' => 'atas7.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 8',
            'apparel_id' => 1,
            'harga' => 60000,
            'gambar' => 'atas8.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 9',
            'apparel_id' => 1,
            'harga' => 65000,
            'gambar' => 'atas9.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 10',
            'apparel_id' => 1,
            'harga' => 45000,
            'gambar' => 'atas11.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 11',
            'apparel_id' => 1,
            'harga' => 55000,
            'gambar' => 'atas11.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 12',
            'apparel_id' => 1,
            'harga' => 57500,
            'gambar' => 'atas12.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 13',
            'apparel_id' => 1,
            'harga' => 65000,
            'gambar' => 'atas13.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Atasan 14',
            'apparel_id' => 1,
            'harga' => 40000,
            'gambar' => 'atas14.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bawahan 1',
            'apparel_id' => 2,
            'harga' => 70000,
            'gambar' => 'bwh1.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bawahan 2',
            'apparel_id' => 2,
            'harga' => 55000,
            'gambar' => 'bwh2.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bawahan 3',
            'apparel_id' => 2,
            'harga' => 80000,
            'gambar' => 'bwh3.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bawahan 4',
            'apparel_id' => 2,
            'harga' => 45000,
            'gambar' => 'bwh4.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bawahan 5',
            'apparel_id' => 2,
            'harga' => 50000,
            'gambar' => 'bwh5.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bawahan 6',
            'apparel_id' => 2,
            'harga' => 55000,
            'gambar' => 'bwh6.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bawahan 7',
            'apparel_id' => 2,
            'harga' => 77500,
            'gambar' => 'bwh7.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bawahan 8',
            'apparel_id' => 2,
            'harga' => 50000,
            'gambar' => 'bwh8.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Bawahan 9',
            'apparel_id' => 2,
            'harga' => 60000,
            'gambar' => 'bwh9.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Tas 1',
            'apparel_id' => 3,
            'harga' => 15000,
            'gambar' => '1.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Tas 2',
            'apparel_id' => 3,
            'harga' => 15000,
            'gambar' => '2.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Tas 3',
            'apparel_id' => 3,
            'harga' => 15000,
            'gambar' => '3.png'
        ]);

        DB::table('products')->insert([
            'nama' => 'Tas 4',
            'apparel_id' => 3,
            'harga' => 15000,
            'gambar' => '4.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Tas 5',
            'apparel_id' => 3,
            'harga' => 15000,
            'gambar' => '5.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Tas 6',
            'apparel_id' => 3,
            'harga' => 15000,
            'gambar' => '6.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Tas 7',
            'apparel_id' => 3,
            'harga' => 15000,
            'gambar' => '7.jpg'
        ]);

        DB::table('products')->insert([
            'nama' => 'Tas 8',
            'apparel_id' => 3,
            'harga' => 15000,
            'gambar' => '8.jpg'
        ]);
    }
}
