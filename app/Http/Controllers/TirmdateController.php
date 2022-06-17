<?php

namespace App\Http\Controllers;

use App\Models\Tirmdate;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TirmdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getdatesforweek($num)
    {
        // current=0
        // next=1
        // last=-1
    //    $dd= Carbon::now()->format('d-m-Y');
    // $Tirmdate=  Tirmdate::all()->first();
    // dd($Tirmdate);
    $datetoday= Carbon::now()->format('Y-m-d');
    $Tirmdate_current=  Tirmdate::where('date',$datetoday)->get()->first()->week;
    $week=$Tirmdate_current+$num;
$Tirmdatewek=  Tirmdate::all()->where('week',$week);
// dd($Tirmdatewek,$week);
return response()->json($Tirmdatewek);  
    }

    public function getdatesforcurrentweek()
    {
        // current=0
        // next=1
        // last=-1
    //    $dd= Carbon::now()->format('d-m-Y');
    // $Tirmdate=  Tirmdate::all()->first();
    // dd($Tirmdate);
    $datetoday= Carbon::now()->format('Y-m-d');
    $Tirmdate_current=  Tirmdate::where('date',$datetoday)->get()->first()->week;
    $week=$Tirmdate_current;
$Tirmdatewek=  Tirmdate::all()->where('week',$week);
// dd($Tirmdatewek,$week);
return response()->json($Tirmdatewek);  
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
     * @param  \App\Models\Tirmdate  $tirmdate
     * @return \Illuminate\Http\Response
     */
    public function show(Tirmdate $tirmdate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tirmdate  $tirmdate
     * @return \Illuminate\Http\Response
     */
    public function edit(Tirmdate $tirmdate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tirmdate  $tirmdate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tirmdate $tirmdate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tirmdate  $tirmdate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tirmdate $tirmdate)
    {
        //
    }
}
