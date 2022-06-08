<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();
        DB::table('categories')->insert([
            [ 'id' => 1, 'name' => 'Real Madrid FC', 'slug' => 'real-madrid-fc'],
            [ 'id' => 2,'name' => 'Bạch Lộc', 'slug' => 'bach-loc'],
            [ 'id' => 3,'name' => 'UEFA Champions League', 'slug' => 'uefa-champions-league'],
            [ 'id' => 4,'name' => 'Cảnh Sát Vinh Dự', 'slug' => 'canh-sat-vinh-du'],
            [ 'id' => 5,'name' => 'Chuyển nhượng bóng đá', 'slug' => 'chuyen-nhuong-bong-da'],
            [ 'id' => 6,'name' => 'Bóng đá', 'slug' => 'bong-da'],

        ]);
    }
}
