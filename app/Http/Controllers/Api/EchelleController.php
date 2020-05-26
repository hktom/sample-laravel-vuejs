<?php

namespace App\Http\Controllers\Api;

use App\Echelle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\EchelleResource;
use Illuminate\Support\Facades\Validator;

class EchelleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EchelleResource::collection('App\Echelle'::OrderBy('id', 'ASC')->get());
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
     * @param  \App\Echelle  $echelle
     * @return \Illuminate\Http\Response
     */
    public function show(Echelle $echelle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Echelle  $echelle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Echelle $echelle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Echelle  $echelle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Echelle $echelle)
    {
        //
    }
}
