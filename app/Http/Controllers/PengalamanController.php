<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Pengalaman;
use Illuminate\Http\Request;
use Session;

class PengalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $pengalaman = Pengalaman::paginate(25);

        return view('pengalaman.index', compact('pengalaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pengalaman.create');
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
        
        Pengalaman::create($requestData);

        Session::flash('flash_message', 'Pengalaman added!');

        return redirect('pengalaman');
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
        $pengalaman = Pengalaman::findOrFail($id);

        return view('pengalaman.show', compact('pengalaman'));
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
        $pengalaman = Pengalaman::findOrFail($id);

        return view('pengalaman.edit', compact('pengalaman'));
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
        
        $pengalaman = Pengalaman::findOrFail($id);
        $pengalaman->update($requestData);

        Session::flash('flash_message', 'Pengalaman updated!');

        return redirect('pengalaman');
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
        Pengalaman::destroy($id);

        Session::flash('flash_message', 'Pengalaman deleted!');

        return redirect('pengalaman');
    }
}
