<?php

namespace App\Http\Controllers;

use App\Models\Periodtime;
use Illuminate\Http\Request;

class PeriodtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // periodtimes
      public function getperiodtimes()
    {
        $Periodtime=  Periodtime::all();
        return response()->json($Periodtime);
    }


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
     * @param  \App\Models\Periodtime  $periodtime
     * @return \Illuminate\Http\Response
     */
    public function show(Periodtime $periodtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Periodtime  $periodtime
     * @return \Illuminate\Http\Response
     */
    public function edit(Periodtime $periodtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Periodtime  $periodtime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Periodtime $periodtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Periodtime  $periodtime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Periodtime $periodtime)
    {
        //
    }
}
