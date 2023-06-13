<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Tambah data dummy
        Member::create([
            'name' => 'Azka Zharari',
            'email' => 'zharari.azka@gmail.com',
            'gender' => 'Pria',
            'status' => 'Mahasiswa',
            'address' => 'Jl. Cidepok',
        ]);
    }
}
