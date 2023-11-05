<?php

namespace App\Http\Controllers;

use App\Models\Perscription;
use App\Http\Requests\StorePerscriptionRequest;
use App\Http\Requests\UpdatePerscriptionRequest;

class PerscriptionController extends Controller
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
     * @param  \App\Http\Requests\StorePerscriptionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePerscriptionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perscription  $perscription
     * @return \Illuminate\Http\Response
     */
    public function show(Perscription $perscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perscription  $perscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Perscription $perscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerscriptionRequest  $request
     * @param  \App\Models\Perscription  $perscription
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePerscriptionRequest $request, Perscription $perscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perscription  $perscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perscription $perscription)
    {
        //
    }
}
