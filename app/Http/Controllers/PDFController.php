<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
   public function PDFgenerator()
   {
       $pdf = PDF::loadview('Studentsubmitform');
       return $pdf->download('Studentsubmitform.pdf');
   }
}

