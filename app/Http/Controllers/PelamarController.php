<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Pelamar;
use Illuminate\Http\Request;
use Session;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
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
        $tes = Auth::user()->email;
        $pelamar = Pelamar::where('pelamar_email','=',$tes)->paginate(25);

        return view('pelamar.index', compact('pelamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pelamar.create');
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

        Pelamar::create($requestData);

        Session::flash('flash_message', 'Pelamar added!');

        return redirect('pelamar');
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
        $pelamar = Pelamar::findOrFail($id);

        return view('pelamar.show', compact('pelamar'));
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
        $pelamar = Pelamar::findOrFail($id);

        return view('pelamar.edit', compact('pelamar'));
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

        $pelamar = Pelamar::findOrFail($id);
        $pelamar->update($requestData);

        Session::flash('flash_message', 'Pelamar updated!');

        return redirect('pelamar');
    }
    public function view()
    {
        $pelamar = Pelamar::paginate(25);


        return view('konfirmasi.konfirmasi', compact('pelamar'));
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
        Pelamar::destroy($id);

        Session::flash('flash_message', 'Pelamar deleted!');

        return redirect('pelamar');
    }
}
