<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\user;
use App\Models\produk;
use App\Models\kategori;
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

        user::create([
            'name'=>'audin',
            'email'=>'asep@gg.com',
            'password'=>bcrypt('12'),
            'role'=>'customer'
        ]);

        $kategori=kategori::create([
            'name'=>'Gadget'
        ]);

        produk::create([
            'kategori_id'=>1,
            'name'=>'Iphone 12 IBOX',
            'harga'=>25000000,
            'foto'=>'img/terlaris 2.jpg',
            'detail'=>'Iphone 12 Mini,kondisi baru RAM 8/256 garansi resmi '
        ]);
        produk::create([
            'kategori_id'=>1,
            'name'=>'Ipad Pro 2020',
            'harga'=>30000000,
            'foto'=>'img/terlaris 1.jpg',
            'detail'=>'ipad pro 2020,kondisi baru RAM 8/256 '
        ]);
        produk::create([
            'kategori_id'=>1,
            'name'=>'Jam tangan digital',
            'harga'=>3000000,
            'foto'=>'img/terlaris 3.jpg',
            'detail'=>'JAm tangan terbaru buatan jepang, garansi seumur hidup '
        ]);
        produk::create([
            'kategori_id'=>1,
            'name'=>'Iphone 12 ',
            'harga'=>20000000,
            'foto'=>'img/terlaris 5.png',
            'detail'=>'iphone 12 ,kondisi baru RAM 8/256, garansi resmi distributor'
        ]);

    }
}
