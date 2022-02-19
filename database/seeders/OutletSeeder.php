<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlet = [
            [
               'nama_outlet' => 'fitriani',
               'alamat' => 'cianjur',
               'telepon' => '0877811277'
            ]
           
        ];
        DB::table('outlet')->insert($outlet);
    }
}
