<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Penerimaan;
class PDFController extends Controller
{
    public function getPDF()
    {
      $penerima=Penerimaan::all();
      $pdf=PDF::loadview('pdf.image',['penerimaan' => $penerima]);
      return $pdf->stream('download.pdf');
    }
}
