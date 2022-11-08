<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
//use Barryvdh\DomPDF\Facade\Pdf;

class DocumentController extends Controller
{
    public function index(){
        return view('index');
    }

    public function download(){
//        return $pdf->download('i-131.pdf');
        set_time_limit(600);
        $pdf = Pdf::loadView('document2print');
//        return view('document2print');
        return $pdf->stream('invoice.pdf');
    }
}
