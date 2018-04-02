<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\lowongan;
use Illuminate\Http\Request;
use Session;

class lowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $lowongan = lowongan::paginate(25);

        return view('lowongan.index', compact('lowongan'));
    }

    public function view()
    {
        $lowongan = lowongan::paginate(25);

        return view('postlowongan', compact('lowongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('lowongan.create');
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

        lowongan::create($requestData);

        Session::flash('flash_message', 'lowongan added!');

        return redirect('lowongan');
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
        $lowongan = lowongan::findOrFail($id);

        return view('lowongan.show', compact('lowongan'));
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
        $lowongan = lowongan::findOrFail($id);

        return view('lowongan.edit', compact('lowongan'));
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

        $lowongan = lowongan::findOrFail($id);
        $lowongan->update($requestData);

        Session::flash('flash_message', 'lowongan updated!');

        return redirect('lowongan');
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
        lowongan::destroy($id);

        Session::flash('flash_message', 'lowongan deleted!');

        return redirect('lowongan');
    }
}
