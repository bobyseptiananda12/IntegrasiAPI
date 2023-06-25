<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = date('Y-m-d H:i:s');

        pegawai::insert([
            ['name' => 'Bob',
             'address' => 'Surabaya',
             'Age' => '20',
             'Phone' => '081514574103',
             'created_at' => $timestamp,
             'updated_at'=>$timestamp],

        ]);
    }
}
