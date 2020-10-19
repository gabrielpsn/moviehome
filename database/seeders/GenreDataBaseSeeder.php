<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['description' => 'Ação'],
            ['description' => 'Terror'],
            ['description' => 'Comédia'],
            ['description' => 'Fantasia'],
            ['description' => 'Ficção Científica'],
            ['description' => 'Infantil']
        ]);
    }
}
