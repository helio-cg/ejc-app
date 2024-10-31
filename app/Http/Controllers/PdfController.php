<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Equipe;
use App\Models\EquipeCirculo;
use App\Models\Inscricao;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index($equipe)
    {
        $equipe = Equipe::where('equipe',$equipe)->first();
        if($equipe->equipe == 'Dirigente'){
            $pdf = Pdf::loadView('equipe.dirigente', compact('equipe'));
            return $pdf->stream('equipe-dirigente.pdf');
        }elseif ($equipe->equipe == 'Coordenação Geral'){
            $pdf = Pdf::loadView('equipe.coordenacao-geral', compact('equipe'));
            return $pdf->stream('equipe-coordenacao-geral.pdf');
        }elseif ($equipe->equipe == 'Conselho Diosesano'){
            $pdf = Pdf::loadView('equipe.conselho-diocesano', compact('equipe'));
            return $pdf->stream('equipe-conselho-diocesano.pdf');
        }else{
            $pdf = Pdf::loadView('equipe', compact('equipe'));
            return $pdf->stream('equipe-de-'.$equipe->equipe.'.pdf');
        }

        // Renderizar a view
        //$html = view('equipe',compact('equipe'))->render();

    }

    public function circulo($equipe)
    {
        $equipe = EquipeCirculo::where('equipe',$equipe)->first();
        $pdf = Pdf::loadView('equipe', compact('equipe'));
        return $pdf->stream('equipe-de-'.$equipe->equipe.'.pdf');
    }

    public function form($filename){
        $pdf = Pdf::loadView('forms.equipes-'.$filename.'-form', compact('inscrito'));
        return $pdf->stream('ficha-de-componentes-'.$filename.'.pdf');
    }
}
