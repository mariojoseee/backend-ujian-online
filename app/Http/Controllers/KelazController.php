<?php

namespace App\Http\Controllers;

use App\Models\Kelaz;
use Illuminate\Http\Request;

class KelazController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.layouts.kelaz.index_kelaz', [
            'title' => "Kelas",
            'smallTitle' => " - Kelas",
            'headTitle' => "Kelas",
            'kelazs' => Kelaz::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelaz  $kelaz
     * @return \Illuminate\Http\Response
     */
    public function show(Kelaz $kelaz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelaz  $kelaz
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelaz $kelaz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelaz  $kelaz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelaz $kelaz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelaz  $kelaz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelaz $kelaz)
    {
        //
    }
}
