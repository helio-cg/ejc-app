<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Equipe;
use App\Models\Inscricao;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index($equipe)
    {
        $equipe = Equipe::where('equipe',$equipe)->first();

        $pdf = Pdf::loadView('equipe', compact('equipe'));
        return $pdf->stream('equipe-de-'.$equipe.'.pdf');

        // Renderizar a view
        //$html = view('equipe',compact('equipe'))->render();


    }

    public function iscricao($id){
        $inscrito = Inscricao::where('id',$id)->first();

        $pdf = Pdf::loadView('inscricao.pdf', compact('inscrito'));
        return $pdf->stream('inscrito-'.$inscrito->nome_completo.'.pdf');
    }
}
