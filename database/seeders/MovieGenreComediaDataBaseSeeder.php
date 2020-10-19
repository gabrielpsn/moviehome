<?php

namespace Database\Seeders;

use App\Models\genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenreComediaDataBaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comedia = genre::where('description', 'Comédia')->first();
        DB::table('movies')->insert([
            [
                'title' => 'SCOOBY! O Filme',
                'imgBanner' => '',
                'img' => 'http://br.web.img3.acsta.net/c_215_290/pictures/20/03/05/20/58/4942195.jpg',
                'description' => 'História de origem de como Salsicha e Scooby se conheceram, e se uniram aos detetives
                 Fred, Velma e Daphne para formar a Mistério S/A. O grupo ainda enfrenta o desafio de impedir o 
                 "apocãolipse", que virá quando o fantasma do cão Cerberus for liberado no mundo.',
                'genre_id' => $comedia->id,
                'next_movies' => false,
                'trending' => false
            ],
            [
                'title' => 'Divertida Mente',
                'imgBanner' => '',
                'img' => 'http://br.web.img3.acsta.net/c_215_290/pictures/15/05/14/14/20/365361.jpg',
                'description' => 'Riley é uma garota divertida de 11 anos de idade, que deve enfrentar mudanças 
                importantes em sua vida quando seus pais decidem deixar a sua cidade natal, no estado de Minnesota,
                 para viver em San Francisco. Dentro do cérebro de Riley, convivem várias emoções diferentes, como a 
                 Alegria, o Medo, a Raiva, o Nojinho e a Tristeza. A líder deles',
                'genre_id' => $comedia->id,
                'next_movies' => false,
                'trending' => false
            ],
        ]);
    }
}
