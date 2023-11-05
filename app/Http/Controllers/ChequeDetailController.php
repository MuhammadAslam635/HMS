<?php

namespace App\Http\Controllers;

use App\Models\chequeDetail;
use App\Http\Requests\StorechequeDetailRequest;
use App\Http\Requests\UpdatechequeDetailRequest;

class ChequeDetailController extends Controller
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
     * @param  \App\Http\Requests\StorechequeDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorechequeDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\chequeDetail  $chequeDetail
     * @return \Illuminate\Http\Response
     */
    public function show(chequeDetail $chequeDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\chequeDetail  $chequeDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(chequeDetail $chequeDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatechequeDetailRequest  $request
     * @param  \App\Models\chequeDetail  $chequeDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatechequeDetailRequest $request, chequeDetail $chequeDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\chequeDetail  $chequeDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(chequeDetail $chequeDetail)
    {
        //
    }
}
