<?php

namespace App\Http\Controllers;

use App\Models\PatientVist;
use App\Http\Requests\StorePatientVistRequest;
use App\Http\Requests\UpdatePatientVistRequest;

class PatientVistController extends Controller
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
     * @param  \App\Http\Requests\StorePatientVistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientVistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PatientVist  $patientVist
     * @return \Illuminate\Http\Response
     */
    public function show(PatientVist $patientVist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PatientVist  $patientVist
     * @return \Illuminate\Http\Response
     */
    public function edit(PatientVist $patientVist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientVistRequest  $request
     * @param  \App\Models\PatientVist  $patientVist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientVistRequest $request, PatientVist $patientVist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PatientVist  $patientVist
     * @return \Illuminate\Http\Response
     */
    public function destroy(PatientVist $patientVist)
    {
        //
    }
}
