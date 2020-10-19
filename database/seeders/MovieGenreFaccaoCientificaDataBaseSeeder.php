<?php

namespace Database\Seeders;

use App\Models\genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenreFaccaoCientificaDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ficcao = genre::where('description', 'Ficção Científica')->first();
        DB::table('movies')->insert([
            [
                'title' => 'De Volta para o Futuro',
                'imgBanner' => '',
                'img' => 'http://br.web.img3.acsta.net/c_215_290/medias/nmedia/18/90/95/62/20122008.jpg',
                'description' => 'Um jovem (Michael J. Fox) aciona acidentalmente uma máquina do tempo construída por
                 um cientista (Christopher Lloyd) em um Delorean, retornando aos anos 50. Lá conhece 
                 sua mãe (Lea Thompson), antes ainda do casamento com seu pai, que fica apaixonada por ele. 
                 Tal paixão põe em risco sua própria existência, pois alteraria todo o futuro, ...',
                'genre_id' => $ficcao->id,
                'next_movies' => false,
                'trending' => false
            ],
            [
                'title' => 'Interestelar',
                'imgBanner' => '',
                'img' => 'http://br.web.img3.acsta.net/c_215_290/pictures/14/10/31/20/39/476171.jpg',
                'description' => 'Após ver a Terra consumindo boa parte de suas reservas naturais, um grupo de 
                astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, 
                possibilitando a continuação da espécie. Cooper (Matthew McConaughey) é chamado para liderar o grupo 
                e aceita a missão sabendo que pode nunca mais ver os filhos. Ao ...',
                'genre_id' => $ficcao->id,
                'next_movies' => false,
                'trending' => false
            ]
        ]);
    }
}
