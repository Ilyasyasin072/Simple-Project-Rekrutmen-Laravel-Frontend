<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Penerimaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Khill\Lavacharts\Lavacharts;
use Lava;

class ChartsController extends Controller {


	public function index()
	{
        $penerima = Penerimaan::orderBy('id_penerima','ASC')->get();
		return view('pages.index',compact('penerima'));
	}
}
