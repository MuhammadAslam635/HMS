<?php

namespace App\Http\Controllers;

use App\Models\MedicalCertification;
use App\Http\Requests\StoreMedicalCertificationRequest;
use App\Http\Requests\UpdateMedicalCertificationRequest;

class MedicalCertificationController extends Controller
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
     * @param  \App\Http\Requests\StoreMedicalCertificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicalCertificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalCertification  $medicalCertification
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalCertification $medicalCertification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalCertification  $medicalCertification
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicalCertification $medicalCertification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedicalCertificationRequest  $request
     * @param  \App\Models\MedicalCertification  $medicalCertification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicalCertificationRequest $request, MedicalCertification $medicalCertification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalCertification  $medicalCertification
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalCertification $medicalCertification)
    {
        //
    }
}
