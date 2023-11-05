<?php

namespace App\Http\Controllers;

use App\Models\HospitalSetting;
use App\Http\Requests\StoreHospitalSettingRequest;
use App\Http\Requests\UpdateHospitalSettingRequest;

class HospitalSettingController extends Controller
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
     * @param  \App\Http\Requests\StoreHospitalSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHospitalSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HospitalSetting  $hospitalSetting
     * @return \Illuminate\Http\Response
     */
    public function show(HospitalSetting $hospitalSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HospitalSetting  $hospitalSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(HospitalSetting $hospitalSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHospitalSettingRequest  $request
     * @param  \App\Models\HospitalSetting  $hospitalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHospitalSettingRequest $request, HospitalSetting $hospitalSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HospitalSetting  $hospitalSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(HospitalSetting $hospitalSetting)
    {
        //
    }
}
