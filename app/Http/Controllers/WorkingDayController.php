<?php

namespace App\Http\Controllers;

use App\Models\WorkingDay;
use App\Http\Requests\StoreWorkingDayRequest;
use App\Http\Requests\UpdateWorkingDayRequest;

class WorkingDayController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkingDayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkingDayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkingDay  $workingDay
     * @return \Illuminate\Http\Response
     */
    public function show(WorkingDay $workingDay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkingDay  $workingDay
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkingDay $workingDay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkingDayRequest  $request
     * @param  \App\Models\WorkingDay  $workingDay
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkingDayRequest $request, WorkingDay $workingDay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkingDay  $workingDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkingDay $workingDay)
    {
        //
    }
}
