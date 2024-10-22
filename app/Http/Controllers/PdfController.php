<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Equipe;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function index($equipe)
    {
        $equipe = Equipe::where('equipe',$equipe)->first();

        $pdf = Pdf::loadView('equipe', compact('equipe'));
        return $pdf->stream('equipe.pdf');

        // Renderizar a view
        //$html = view('equipe',compact('equipe'))->render();


    }

    public function equipe($equipe){
        $equipe = Equipe::where('equipe',$equipe)->first();
        return view('equipe',compact('equipe'));
    }
}
