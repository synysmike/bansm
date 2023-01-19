<?php

namespace App\Http\Controllers;

use App\Models\asesor;
use App\Http\Requests\StoreasesorRequest;
use App\Http\Requests\UpdateasesorRequest;

class AsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreasesorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreasesorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function show(asesor $asesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function edit(asesor $asesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateasesorRequest  $request
     * @param  \App\Models\asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateasesorRequest $request, asesor $asesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asesor  $asesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(asesor $asesor)
    {
        //
    }
}
