<?php

namespace App\Http\Controllers\Api;

use App\Ponc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TypeResource;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TypeResource::collection('App\Ponc'::OrderBy('content', 'ASC')->get());
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
     * @param  \App\Ponc  $ponc
     * @return \Illuminate\Http\Response
     */
    public function show(Ponc $ponc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ponc  $ponc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ponc $ponc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ponc  $ponc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ponc $ponc)
    {
        //
    }
}
