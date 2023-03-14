<?php

namespace App\Http\Controllers;

use App\Models\exp;
use App\Http\Requests\StoreexpRequest;
use App\Http\Requests\UpdateexpRequest;

class ExpController extends Controller
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
     * @param  \App\Http\Requests\StoreexpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreexpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\exp  $exp
     * @return \Illuminate\Http\Response
     */
    public function show(exp $exp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\exp  $exp
     * @return \Illuminate\Http\Response
     */
    public function edit(exp $exp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateexpRequest  $request
     * @param  \App\Models\exp  $exp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateexpRequest $request, exp $exp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\exp  $exp
     * @return \Illuminate\Http\Response
     */
    public function destroy(exp $exp)
    {
        //
    }
}
