<?php

namespace Database\Seeders;

use App\Models\genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenreInfantilDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $infantil = genre::where('description', 'Infantil')->first();
        DB::table('movies')->insert([
            [
                'title' => 'Minions',
                'imgBanner' => '',
                'img' => 'http://br.web.img3.acsta.net/c_215_290/pictures/14/11/04/14/07/517227.jpg',
                'description' => 'Seres amarelos milenares, os minions têm uma missão: servir os maiores vilões. 
                Em depressão desde a morte de seu antigo mestre, eles tentam encontrar um novo chefe. Três voluntários,
                 Kevin, Stuart e Bob, vão até uma convenção de vilões nos Estados Unidos e lá se encantam com Scarlet
                  Overkill (Sandra Bullock), que ambiciona ser a ...',
                'genre_id' => $infantil->id,
                'next_movies' => false,
                'trending' => false
            ],
            [
                'title' => 'E.T. - O Extraterrestre',
                'imgBanner' => '',
                'img' => 'http://br.web.img2.acsta.net/c_215_290/medias/nmedia/18/95/16/34/20384584.jpg',
                'description' => 'Um garoto faz amizade com um ser de outro planeta, que ficou sozinho na Terra, 
                protegendo-o de todas as formas para evitar que ele seja capturado e transformado em cobaia. 
                Gradativamente, surge entre os dois uma forte amizade.',
                'genre_id' => $infantil->id,
                'next_movies' => false,
                'trending' => false
            ],
        ]);
    }
}
