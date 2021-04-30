<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\CEO;
use Illuminate\Http\Request;

class JobTitlesController extends Controller
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
     * @param  \App\CEO  $ceo
     * @return \Illuminate\Http\Response
     */
    public function show(CEO $ceo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CEO  $ceo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CEO $ceo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\CEO $ceo
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(CEO $ceo)
    {
        //
    }
}
