<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            ["title"=>"Matrix",
            "plot"=>"Matrix (The Matrix) è un film di fantascienza del 1999 in stile cyberpunk scritto e diretto dai fratelli Andy e Larry Wachowski.[1]

            Il film, che ha vinto numerosi premi, tra cui quattro Oscar, ha avuto un forte impatto culturale e vi sono state numerose opere che vi fanno riferimento. Nel 2012 è stato scelto per la conservazione nel National Film Registry della Biblioteca del Congresso degli Stati Uniti.",
            "url_img"=>"https://upload.wikimedia.org/wikipedia/it/b/bc/Matrix1999_movie.png"],
            ["title"=>"Matrix Reloade",
            "plot"=>"Matrix (The Matrix) è un film di fantascienza del 1999 in stile cyberpunk scritto e diretto dai fratelli Andy e Larry Wachowski.[1]

            Il film, che ha vinto numerosi premi, tra cui quattro Oscar, ha avuto un forte impatto culturale e vi sono state numerose opere che vi fanno riferimento. Nel 2012 è stato scelto per la conservazione nel National Film Registry della Biblioteca del Congresso degli Stati Uniti.",
            "url_img"=>"https://upload.wikimedia.org/wikipedia/it/b/b0/Matrix_Reloaded.jpg"]
        ];

        foreach($movies as $movie){
            $newMovie = new Movie();
            $newMovie->title = $movie["title"];
            $newMovie->plot = $movie["plot"];
            $newMovie->url_img = $movie["url_img"];

            $newMovie->save();

        }
    }
}
