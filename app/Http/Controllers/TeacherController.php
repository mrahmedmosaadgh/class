<?php

namespace App\Http\Controllers;

use App\Models\Periodtime;
use App\Models\Schedule;
use App\Models\Teacher;
use App\Models\Tirmdate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getteacher( $teacher_id)
    {
        $teachersall = Teacher::where('teacher_id',$teacher_id)->get();
        // $myclassall = MyTeacher::where('class_name',$myclass)->get(['full_name_en','class_name']);
// dd(response()->json($myclassall));
        return response()->json($teachersall);
    }

       public function getteachers()
    {
        $myclassall = Teacher::all();

        return response()->json($myclassall);
    } 








    // ============================================================================
public function teachermaindataget()
    {
        // "id" => 4
        // "school_id" => 1
        // "name" => "Ahmed Mosaad"
        // "email" => "zudo@mailinator.com"
// dd( Auth::user()->id );
// dd( Auth::user()->school_id );
$teacher_id=   Auth::user()->id;
$school_id=   Auth::user()->school_id;
        $Periodtime=  Periodtime:: where('school_id',$school_id)->get();

        $teacherdata = Teacher::where('teacher_id',$teacher_id)->
                                where('school_id',$school_id)->get();

                    // dd($teacherdata );
                    // "school_id" => 1
                    // "teacher_id" => 4
                    // "name" => "Ahmed Mosaad"
                    // "subject" => "Math"
                    // "stages" => "['prim']"
                    // "classes" => "4A,4B,4C,4D,5A,5B,5C"
                    // "active" => 1
                    // "name_ar" => "احمد مسعد"
                    // "notes" => "AA--"
        $datetoday= Carbon::now()->format('Y-m-d');
        $Tirmdate_current=Tirmdate::where('date',$datetoday)->
                                    where('school_id',$school_id)->get()->first()->week;

        $week=$Tirmdate_current;
        $Tirmdateweek=  Tirmdate::where('week',$week)-> 
                                  where('school_id',$school_id)->get();
// ============================

//   dd($Tirmdateweek);
//   "id" => 15
//   "school_id" => 1
//   "term_name" => "s3"
//   "day" => "1"
//   "week" => "3"
//   "date" => "2022-04-03"
//   "active" => 1
//   "notes" => null
// $schedule=  Schedule::
// where('school_id',$school_id)
// ->where('teacher_id',$teacher_id)
// ->orderBy('day', 'ASC')
// ->orderBy('period', 'ASC')
// ->get();
        // $myclassall = MyTeacher::where('class_name',$myclass)->get(['full_name_en','class_name']);
// 
        $schedule=  schedule::where('school_id',$school_id)
                            ->where('teacher_id',$teacher_id)
                            ->orderBy('day', 'ASC')
                            ->orderBy('period', 'ASC')
                            ->get();

            // dd($schedule);
            // "id" => 1
            //         "school_id" => 1
            //         "day" => "1"
            //         "period" => "1"
            //         "class_name" => "5B"
            //         "sorder" => 1
            //         "teacher_id" => "4"
            //         "subject" => "Math"
            //         "color" => "green"
            //         "active" => 1
            //         "notes" => null
            //         "created_at" => null
            //         "updated_at" => null

$teachermaindataarray=[
    'Periodtime'   => $Periodtime,
    'teacherdata'  => $teacherdata,
    'datesforweek' => $Tirmdateweek,
    'schedule'    => $schedule,   
    
    ]

 ;
        return response()->json($teachermaindataarray);
    }
    // ===============================================================












       public function teacherupdate($id,$col,$val)
    {
        // dd($id,$col,$val);
        Teacher::find($id)->update([$col=>$val]);
        $myclassall = Teacher::all();

        return response()->json($myclassall);
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
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
