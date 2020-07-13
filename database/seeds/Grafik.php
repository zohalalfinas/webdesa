<?php

use Illuminate\Database\Seeder;

class Grafik extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grafik')->insert([
            'positif' => 0,            
            'sembuh' => 0,            
            'meninggal' => 0,            
        ]);
    }
}
