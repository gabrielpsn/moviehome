<?php

namespace Database\Seeders;

use App\Models\genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenreAcaoDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $acao = genre::where('description', 'Ação')->first();
        DB::table('movies')->insert([
            [
                'title' => 'Batman - O Cavaleiro Das Trevas',
                'imgBanner' => '',
                'img' => 'http://br.web.img3.acsta.net/c_215_290/medias/nmedia/18/86/98/32/19870786.jpg',
                'description' => 'Após dois anos desde o surgimento do Batman (Christian Bale), os criminosos de 
                Gotham City têm muito o que temer. Com a ajuda do tenente James Gordon (Gary Oldman) e do promotor 
                público Harvey Dent (Aaron Eckhart), Batman luta contra o crime organizado. Acuados com o combate, 
                os chefes do crime aceitam a proposta feita pelo Coringa (Heath',
                'genre_id' => $acao->id,
                'next_movies' => false,
                'trending' => false
            ],
            [
                'title' => 'Pantera Negra',
                'imgBanner' => '',
                'img' => 'http://br.web.img3.acsta.net/c_215_290/pictures/17/12/07/16/09/2291532.jpg',
                'description' => 'O príncipe T\'Challa retorna a Wakanda para ser coroado rei. Assumindo o manto de 
                Pantera Negra, ele vai à caça de um vilão que roubou um precioso metal de seu país.',
                'genre_id' => $acao->id,
                'next_movies' => false,
                'trending' => false
            ],
        ]);
    }
}
