<?php
namespace App;

class App
{
    public function Iniziale()
    {
        //$listaValori = [0, 1, 1, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 6, 6, 6, 6, 7, 7, 7, 8, 8, 9];
        $listaValori = [2,4];
        $media = \App\Matematica\Media::Media($listaValori);
        $scartoQuadraticoMedio = \App\Matematica\Media::ScartoQuadraticoMedio($listaValori);
        $mediaSenzaAnomalie = \App\Matematica\Media::MediaSenzaAnomalie($listaValori);
        
        echo $media . "<br>";
        echo $scartoQuadraticoMedio . "<br>";
        echo $mediaSenzaAnomalie . "<br>";
    }
}
