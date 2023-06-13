<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //tambah data dummy 
        Book::create([
            'title' => 'Banteng Terakhir',
            'isbn' => '12345627',
            'stok' => 30,
        ]);
    }
}
