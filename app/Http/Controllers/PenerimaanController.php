<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Penerimaan;
use Illuminate\Http\Request;
use Session;

class PenerimaanController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
    public function index()
    {
        $penerimaan = Penerimaan::paginate(25);
      //    return response()->json(compact('penerimaan'));
        return view('penerimaan.index', compact('penerimaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('penerimaan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $requestData = $request->all();

        Penerimaan::create($requestData);

        Session::flash('flash_message', 'Penerimaan added!');

        return redirect('penerimaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $penerimaan = Penerimaan::findOrFail($id);
        //  return response()->json(compact('penerimaan'));
        return view('penerimaan.show', compact('penerimaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $penerimaan = Penerimaan::findOrFail($id);

        return view('penerimaan.edit', compact('penerimaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {

        $requestData = $request->all();

        $penerimaan = Penerimaan::findOrFail($id);
        $penerimaan->update($requestData);

        Session::flash('flash_message', 'Penerimaan updated!');

        return redirect('penerimaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Penerimaan::destroy($id);

        Session::flash('flash_message', 'Penerimaan deleted!');
        return redirect('penerimaan');
    }

    public function search(Request $request){
        $cari = $request->get('search');
        $penerimaan = Penerimaan::where('id_penerima','LIKE','%'.$cari.'%')->paginate(10);
        return view('penerimaan.index', compact('penerimaan'));
    }

    public function data()
    {
      return Datatables::of(\App\Penerimaan::all())
      ->make('true');
    }



}
