<?php

namespace App\Http\Controllers;

use App\Models\kpa;
use App\Http\Requests\StorekpaRequest;
use App\Http\Requests\UpdatekpaRequest;

class KpaController extends Controller
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
     * @param  \App\Http\Requests\StorekpaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekpaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kpa  $kpa
     * @return \Illuminate\Http\Response
     */
    public function show(kpa $kpa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kpa  $kpa
     * @return \Illuminate\Http\Response
     */
    public function edit(kpa $kpa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekpaRequest  $request
     * @param  \App\Models\kpa  $kpa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekpaRequest $request, kpa $kpa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kpa  $kpa
     * @return \Illuminate\Http\Response
     */
    public function destroy(kpa $kpa)
    {
        //
    }
}
