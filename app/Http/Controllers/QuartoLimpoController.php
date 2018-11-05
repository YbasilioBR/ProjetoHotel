<?php

namespace App\Http\Controllers;

use App\QuartoLimpo;
use Illuminate\Http\Request;

class QuartoLimpoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quartos = QuartoLimpo::all();
        return view('QuartoLimpo.index', compact('quartos'));
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
     * @param  \App\QuartoLimpo  $quartoLimpo
     * @return \Illuminate\Http\Response
     */
    public function show(QuartoLimpo $quartoLimpo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuartoLimpo  $quartoLimpo
     * @return \Illuminate\Http\Response
     */
    public function edit(QuartoLimpo $quartoLimpo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuartoLimpo  $quartoLimpo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuartoLimpo $quartoLimpo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuartoLimpo  $quartoLimpo
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuartoLimpo $quartoLimpo)
    {
        //
    }
}
