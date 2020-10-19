<?php

namespace Tests\Feature;

use Tests\TestCase;

class MoviesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRouterIndex()
    {
        $response = $this->get('/api/movies');
        $response->assertStatus(200);
    }

    public function testListMovies()
    {
        $response = $this->get('/api/movies');
        $data = $response->json();
        $this->assertNotEmpty($data);
        $this->assertArrayHasKey('title', $data[0]);
        $this->assertArrayHasKey('description', $data[0]);
        $this->assertArrayHasKey('genre_id', $data[0]);
        $this->assertArrayHasKey('next_movies', $data[0]);
        $this->assertArrayHasKey('trending', $data[0]);
    }

    public function testRouterNotExisting()
    {
        $response = $this->get('/api/movie');
        $response->assertStatus(404);
    }

    public function testListMoviesWithFilterByTitle()
    {
        $response = $this->get('/api/movies/filter?search=O Albergue');
        $data = $response->json();
        $this->assertNotEmpty($data);
        $this->assertArrayHasKey('title', $data[0]);
        $this->assertArrayHasKey('description', $data[0]);
        $this->assertArrayHasKey('genre_id', $data[0]);
        $this->assertArrayHasKey('next_movies', $data[0]);
        $this->assertArrayHasKey('trending', $data[0]);
        $this->assertEquals('O Albergue', $data[0]['title']);
        $this->assertEquals(1, $data[0]['genre_id']);
        $this->assertEquals(false, $data[0]['next_movies']);
        $this->assertEquals(false, $data[0]['trending']);
    }
}
