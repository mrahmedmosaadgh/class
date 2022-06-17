<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Marksschoolinfo;
use Illuminate\Http\Request;

class MarksschooldataController extends Controller
{
    //loadmarksschooldata
    public function loadmarksschooldata($marksschoolinfo_id)
    {
        $Marksschoolinfo=  Marksschoolinfo::all()->where('id',$marksschoolinfo_id);
        return response()->json($Marksschoolinfo);
    }
    public function loadmarksdata($marksschoolinfo_id,$dev)
    {
        $Marksschoolinfo=  Mark::all()->where('marksschoolinfo_id',$marksschoolinfo_id)
        ->where('dev',$dev);
        return response()->json($Marksschoolinfo);
    }
    public function loadmarksdatastudent($marksschoolinfo_id,$dev,$student_num)
    {
        $Marksschoolinfo=  Mark::all()->where('marksschoolinfo_id',$marksschoolinfo_id)
        ->where('dev',$dev) ->where('sitnum',$student_num);
        return response()->json($Marksschoolinfo);
    }
}
