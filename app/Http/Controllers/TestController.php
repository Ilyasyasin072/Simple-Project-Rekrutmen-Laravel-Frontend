<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Alert;

class TestController extends Controller
{
  public function store()
  {
  return view('datatables');
  }
  public function data()
  {
    return Datatables::of(\App\Test::all())
    ->make('true');
  }

}
