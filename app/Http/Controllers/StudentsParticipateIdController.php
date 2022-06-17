<?php

namespace App\Http\Controllers;

 
 
use App\Models\StudentsParticipate;
use App\Models\StudentsParticipateId;
use Illuminate\Http\Request;

class StudentsParticipateIdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  Newparticipations($maindata)
    {
        $arraymain=json_decode($maindata);  

        $school_id  = $arraymain[0]->school_id ;
        $class_name = $arraymain[0]->class_name ;
        $date       = $arraymain[0]->date      ;

        $period     = $arraymain[0]->period    ;
        $day        = $arraymain[0]->day       ;
        $week       = $arraymain[0]->week      ;
        $subject    = $arraymain[0]->subject   ;
        $teacher_id = $arraymain[0]->teacher_id;
        $teacher    = $arraymain[0]->teacher   ;
        $notes      = $arraymain[0]->notes     ;

try {

    
                    StudentsParticipateId::create([

                        'school_id'  => $school_id  ,
                        'class_name' => $class_name ,
                        'date'       => $date       ,
                        'period'     => $period     ,
                        'day'        => $day        ,
                        'week'       => $week       ,
                        'subject'    => $subject    ,
                        'teacher_id' => $teacher_id ,
                        'teacher'    => $teacher    ,
                        'notes'      => $notes      ,
                        
    
                               ]);

                               return response()->json('done'); 


} catch (\Throwable $th) {
  
    return response()->json('error'); 
}

   
    }
// saveparticipations==================================
    public function  saveparticipations($participationsdata,$maindata)
    {

        $arraymain=json_decode($maindata);  
        $participationsdata=json_decode($participationsdata); 
        // dd($participationsdata);
        // foreach ($participationsdata as $key => $value) {

        //     $school_id        =$value->school_id         ;

        //     $class_name       =$value->class_name        ;
        //     // $subject          =$value->subject  ;
          
        // }
        //arraymain +"school_id": 1
        // +"class_name": "5A"
        // +"date": "2022-3-28"
        // +"period": 1
        // +"day": 2
        // +"week": "2"
        // +"subject": "Math"
        // +"teacher_id": 4
        // +"teacher": "Ahmed Mosaad"
        // +"absent": ""
        // +"notes": ""

        $school_id  = $arraymain[0]->school_id ;
        $class_name = $arraymain[0]->class_name ;
        $date       = $arraymain[0]->date      ;

        $period     = $arraymain[0]->period    ;
        $day        = $arraymain[0]->day       ;
        $week       = $arraymain[0]->week      ;
        $subject    = $arraymain[0]->subject   ;
        $teacher_id = $arraymain[0]->teacher_id;
        $teacher    = $arraymain[0]->teacher   ;
        $notes      = $arraymain[0]->notes     ;
        
        // dd(date('Y-m-d', strtotime($date)));
        // dd($date );
        //   dd($arraymain,$participationsdata,$subject );
 $date       = date('Y-m-d', strtotime($date))    ;
// dd ( $date );
        try {
            $participate_id=StudentsParticipateId::where('class_name',$class_name)->
            where('subject',$subject)->
            orderBy('id', 'DESC')->first()->id;
                    
                } catch (\Throwable $th) {



                    StudentsParticipateId::create([

                        'school_id'  => $school_id  ,
                        'class_name' => $class_name ,
                        'date'       => $date       ,
                        'period'     => $period     ,
                        'day'        => $day        ,
                        'week'       => $week       ,
                        'subject'    => $subject    ,
                        'teacher_id' => $teacher_id ,
                        'teacher'    => $teacher    ,
                        'notes'      => $notes      ,
                        
    
                               ]);
   
   
                       $participate_id=StudentsParticipateId::where('class_name',$class_name)->
               where('subject',$subject)->
               orderBy('id', 'DESC')->first()->id;


                    // $participate_id="NOt Found" ;
                    // return "Not Found";
                }
        // $participate_idhh   =$participationsdata[0]   ;
        //   dd($participationsdata,$maindata);


                foreach ($participationsdata as $key => $value) {

        // dd($value);
                    $student_id       =$value->student_id        ;
                    $name             =$value->name              ;
                   
 
                    $participate      =$value->participate       ;
                    $plus             =$value->plus              ;
                    $plusnew             =$value->plusnew              ;
                    $minus            =$value->minus             ;
                    $score            =$value->score             ;
                    $total            =$value->total             ;
                    $quiz1                =$value->quiz1                 ;
                    $quiz2                =$value->quiz2                 ;
                    $quiztotal            =$value->quiztotal             ;
                    $project              =$value->project               ;
                    
                    
                    
                    



                    $participatedetails=$value->participatedetails ;
                    $notes            =$value->notes             ;


        // ===create or update======================================================================================

        $StudentsParticipate1 = StudentsParticipate::
        where('participate_id' , $participate_id)->
        where('student_id' , $student_id)

        ->first();
        $StudentsParticipate = StudentsParticipate::
        where('participate_id' , $participate_id)->
        where('student_id' , $student_id);
        if ($StudentsParticipate1 !== null) {
            $StudentsParticipate->update([


       'school_id'          => $school_id        ,
       'participate_id'     => $participate_id   ,
       'student_id'         => $student_id       ,
       'name'               => $name             ,
       'class_name'         => $class_name       ,
       'subject'            => $subject          ,
       'period'             => $period           ,
       'day'                => $day              ,
       'week'               => $week             ,
       'date'               => $date             ,
       'participate'        => $participate      ,
       'plusnew'               => $plusnew             ,
       'plus'               => $plus             ,
       'minus'              => $minus            ,
       'score'              => $score            ,
       'total'              => $total            ,
        "quiz1"                   => $quiz1                ,
        "quiz2"                   => $quiz2                 ,
        "quiztotal"               => $quiztotal              ,
        "project"                 => $project               ,
       'participatedetails' => $participatedetails,
       'notes'              => $notes            ,
    ]);



    } else {
        $StudentsParticipate = StudentsParticipate::create([
        'school_id'          => $school_id        ,
        'participate_id'     => $participate_id   ,
        'student_id'         => $student_id       ,
        'name'               => $name             ,
        'class_name'         => $class_name       ,
        'subject'            => $subject          ,
        'period'             => $period           ,
        'day'                => $day              ,
        'week'               => $week             ,
        'date'               => $date             ,
        'participate'        => $participate      ,
        'plusnew'               => $plusnew             ,
        'plus'               => $plus             ,
        'minus'              => $minus            ,
        'score'              => $score            ,
        'total'              => $total            ,
        "quiz1"                   => $quiz1                ,
        "quiz2"                   => $quiz2                 ,
        "quiztotal"               => $quiztotal              ,
        "project"                 => $project               ,
        'participatedetails' => $participatedetails,
        'notes'              => $notes            ,
            ]);
        }
        // ===create or update======================================================================================

        }                  
        // dd( $StudentsParticipate);

        try {
            $participations_students_load=StudentsParticipate::where('participate_id',$participate_id)->get();

                    
            } catch (\Throwable $th) {
                $participations_students="NOt Found" ;
                
            }

    //         dd($arraymain,
    //         is_array($arraymain),
    //         $arraymain[0][2],
    
    // $participations_students_load
    //     );
            return response()->json($participations_students_load ); 
}
// saveparticipations==================================

// loadparticipations==================================
    public function  loadparticipations($maindata)
    {

        $arraymain=json_decode($maindata);  
 
        $school_id  = $arraymain[0]->school_id ;
        $class_name = $arraymain[0]->class_name ;
        $date       = $arraymain[0]->date      ;

        $period     = $arraymain[0]->period    ;
        $day        = $arraymain[0]->day       ;
        $week       = $arraymain[0]->week      ;
        $subject    = $arraymain[0]->subject   ;
        $teacher_id = $arraymain[0]->teacher_id;
        $teacher    = $arraymain[0]->teacher   ;
        $notes      = $arraymain[0]->notes     ;
        $date       = date('Y-m-d', strtotime($date))    ;

        try {
            $participate_id=StudentsParticipateId::where('class_name',$class_name)->
            where('subject',$subject)->
            orderBy('id', 'DESC')->first()->id;
                    
                } catch (\Throwable $th) {

                    StudentsParticipateId::create([

                     'school_id'  => $school_id  ,
                     'class_name' => $class_name ,
                     'date'       => $date       ,
                     'period'     => $period     ,
                     'day'        => $day        ,
                     'week'       => $week       ,
                     'subject'    => $subject    ,
                     'teacher_id' => $teacher_id ,
                     'teacher'    => $teacher    ,
                     'notes'      => $notes      ,
                     
 
                            ]);


                    $participate_id=StudentsParticipateId::where('class_name',$class_name)->
            where('subject',$subject)->
            orderBy('id', 'DESC')->first()->id;
                    // $participate_id="NOt Found" ;
                    // return "Not Found";
                }
 

 

        try {
            $participations_students_load=StudentsParticipate::where('participate_id',$participate_id)->get();

                    
            } catch (\Throwable $th) {
                $participations_students_load="NOt Found" ;
                
            }


            return response()->json($participations_students_load ); 
}
// loadparticipations==================================





    
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
     * @param  \App\Models\StudentsParticipateId  $studentsParticipateId
     * @return \Illuminate\Http\Response
     */
    public function show(StudentsParticipateId $studentsParticipateId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentsParticipateId  $studentsParticipateId
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentsParticipateId $studentsParticipateId)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentsParticipateId  $studentsParticipateId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentsParticipateId $studentsParticipateId)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentsParticipateId  $studentsParticipateId
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentsParticipateId $studentsParticipateId)
    {
        //
    }
}
