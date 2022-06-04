<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kategori = [

            [
                'nama_kategori' => 'Foto Desa',
                'deskripsi' => 'Foto-Foto mengenai kondisi desa wisata', 
            ],
            [
                'nama_kategori' => 'Foto Adat',
                'deskripsi' => 'Foto-Foto mengenai adat yang terdapat pada desa wisata', 
            ],
            [
                'nama_kategori' => 'Foto Hasil Bumi',
                'deskripsi' => 'Foto-Foto mengenai hasil bumi yang dihasilkan oleh desa wisata', 
            ],
            [
                'nama_kategori' => 'Foto Souvenir',
                'deskripsi' => 'Foto-Foto mengenai souvenir atau oleh-oleh khas dari desa wisata', 
            ],
            [
                'nama_kategori' => 'Foto Makanan Khas',
                'deskripsi' => 'Foto-Foto mengenai makanan khas yang berada di desa wisata', 
            ]
            
        ];
        foreach ($kategori as $key => $value) {
            Kategori::create($value);
        }
    }
}
