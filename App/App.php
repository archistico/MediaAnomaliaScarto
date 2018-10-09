<?php
namespace App;

class App
{
    public function Iniziale($f3)
    {
        //$listaValori = [0, 1, 1, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 6, 6, 6, 6, 7, 7, 7, 8, 8, 9];
        $listaValori = [2,4];
        $media = \App\Matematica\Media::Media($listaValori);
        $scartoQuadraticoMedio = \App\Matematica\Media::ScartoQuadraticoMedio($listaValori);
        $mediaSenzaAnomalie = \App\Matematica\Media::MediaSenzaAnomalie($listaValori);
        
        $f3->set('media', $media);
        $f3->set('sqm', $scartoQuadraticoMedio);
        $f3->set('msa', $mediaSenzaAnomalie);

        echo \Template::instance()->render('template/base.htm');
    }
}
