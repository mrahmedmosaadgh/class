<?php

namespace App\Http\Controllers;

use App\Models\StudentsAbsence;
use App\Models\StudentsParticipate;
use Illuminate\Http\Request;

class StudentsParticipateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getparticipate($main,$data)
    {
        $array=json_decode($data);
        $school_id       =$array[0]->school_id ;
        $class_name      =$array[0]->class_name;
        $date            =$array[0]->date      ;
        $day             =$array[0]->day       ;
        $week            =$array[0]->week      ;
        $subject         =$array[0]->subject   ;
        $teacher_id      =$array[0]->teacher_id;
        $teacher         =$array[0]->teacher   ;
        $notes           =$array[0]->notes     ;
        $period          =$array[0]->period    ;
        // $absent          =$absent    ;
        $sec = strtotime($date);  
        //converts seconds into a specific format  
        $date = date ("Y-m-d", $sec);  
        $StudentsAbsence = StudentsAbsence::
        where('school_id' , $school_id       )->
        where('date'      , $date            )->
        where('class_name', $class_name      )->
        where('period'    , $period          )->
        
        
        first();
        return response()->json($StudentsAbsence); 

    }
    public function saveparticipate($data,$absent)
    {
        // $user = User::where('email', request('email'))->first();
 
        // if ($user !== null) {
        //     $user->update(['name' => request('name')]);
        // } else {
        //     $user = User::create([
        //       'email' => request('email'),
        //       'name' => request('name'),
        //     ]);
        // }
        // $absent1          =$data[0]->absent    ;
        $array=json_decode($data);
        // $absent=json_decode($array[0]->absent);
        // dd($array[0] );
        // $array['class_name'];
        $school_id       =$array[0]->school_id ;
        $class_name      =$array[0]->class_name;
        $date            =$array[0]->date      ;
        $day             =$array[0]->day       ;
        $week            =$array[0]->week      ;
        $subject         =$array[0]->subject   ;
        $teacher_id      =$array[0]->teacher_id;
        $teacher         =$array[0]->teacher   ;
        $absent          =$absent    ;
        // $absent          =$array[0]->absent    ;
        
        $notes           =$array[0]->notes     ;
        $period          =$array[0]->period    ;

        // $data1      =$array;
    //     foreach ($array as $key => $value) {

    //         foreach ($value as   $val) {
    //        $data1      =$val->class_name;  
    //     }
    // }
    //   $date = strtotime($date);
    //  $date =  Date( $date);
    //         $date =date_format($date,"Y-m-d");


        // $date = "06/13/2019 5:35 PM";  
        //converts date and time to seconds  
        $sec = strtotime($date);  
        //converts seconds into a specific format  
        $date = date ("Y-m-d", $sec);  
        // $newdate = date ("Y/d/m H:i", $sec);  



        // $date =date_format($date,"Y/m/d H:i:s");
 
        // return response()->json($data1);  
// return $data;
// return $data[0]->school_id;
        $StudentsAbsence = StudentsAbsence::
        where('school_id' , $school_id       )->
        where('date'      , $date            )->
        where('class_name', $class_name      )->
        where('period'    , $period          )->
        
        
        first();
 
        if ($StudentsAbsence !== null) {
            $StudentsAbsence->update([
               'school_id'  => $school_id     ,
               'class_name' => $class_name    ,
               'date'       => $date          ,
               'day'        => $day           ,
               'week'       => $week          ,
               'subject'    => $subject       ,
               'teacher_id' => $teacher_id    ,
               'teacher'    => $teacher       ,
               'absent'     => $absent        ,
               'notes'      => $notes         ,
               'period'     => $period        ,
            ]);
        } else {
            $StudentsAbsence = StudentsAbsence::create([
                'school_id'  => $school_id     ,
                'class_name' => $class_name    ,
                'date'       => $date          ,
                'day'        => $day           ,
                'week'       => $week          ,
                'subject'    => $subject       ,
                'teacher_id' => $teacher_id    ,
                'teacher'    => $teacher       ,
                'absent'     => $absent        ,
               'period'     => $period        ,
               'notes'      => $notes         ,
            ]);
        }
        return response()->json('done:'.$absent); 
        // dd($data);
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
     * @param  \App\Models\StudentsParticipate  $studentsParticipate
     * @return \Illuminate\Http\Response
     */
    public function show(StudentsParticipate $studentsParticipate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentsParticipate  $studentsParticipate
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentsParticipate $studentsParticipate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentsParticipate  $studentsParticipate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentsParticipate $studentsParticipate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentsParticipate  $studentsParticipate
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentsParticipate $studentsParticipate)
    {
        //
    }
}
