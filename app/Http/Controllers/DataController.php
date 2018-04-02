<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends BaseController
{
  function __construct(){
    date_default_timezone_set('Asia/Jakarta');
    $this->data = new data;
  }
  //  public function __construct()
  //  {
  //      $this->middleware('auth');
  //  }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function insert_data()
    {
        $insert['id_penerima'] = ::get('id_penerima');
        $insert['id_testing'] = ::get('id_testing');
        $insert['tgl_penerima'] = ::get('tgl_penerima');
        $insert['hasil_penerima'] = ::get('hasil_penerima');
        $insert['nilai_interview'] = ::get('nilai_interview');
        $insert['nilai_psikotes'] = ::get('nilai_psikotes');
        $insert['status'] = ::get('status');

        if($this->data->ins_data($insert)){
          return Response::json(array('alert'=>'success'));

        }else{
          return Response::json(array('alert'=>'Gagal'));
        }
    }
}
