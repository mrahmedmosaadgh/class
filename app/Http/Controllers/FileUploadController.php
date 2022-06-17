<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
// use App\Models\File;

class FileUploadController extends Controller
{
    //
    // public function fileupload1(Request $request)
    // {
    //    dd($request);  
    //     // $validatedData = $request->validate([
    //     //  'file' => 'required|csv,txt,xlx,xls,pdf|max:2048',
 
    //     // ]);
 
    //     $name = $request->file('file')->getClientOriginalName();
 
    //     $path = $request->file('file')->store('public/files');
 
 
    //     // $save = new File;
 
    //     // $save->name = $name;
    //     // $save->path = $path;
 
    //     return redirect('file-upload')->with('status', 'File Has been uploaded successfully in laravel 8');
 
    // }



//     public function fileupload(Request $req){
//         // $req->validate([
//         // 'file' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
//         // ]);
//         $fileModel = new File();
//         if($req->file()) {
//             $fileName = time().'_'.$req->file->getClientOriginalName();
//             $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
//             $fileModel->name = time().'_'.$req->file->getClientOriginalName();
//             $fileModel->file_path = '/storage/' . $filePath;
//             $fileModel->save();
//             return back()
//             ->with('success','File has been uploaded.')
//             ->with('file', $fileName);
//         }
//    }



//    public function fileStore(Request $request)
//    {
//        $upload_path = public_path('upload');
//        $file_name = $request->file->getClientOriginalName();
//        $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension();
//        $request->file->move($upload_path, $generated_new_name);
        
//        $insert['name'] = $file_name;
//        $check = File::insertGetId($insert);
//        return response()->json(['success' => 'You have successfully uploaded "' . $file_name . '"']);
//    }






   public function formSubmit(Request $request)
   {
       $fileName = time().'.'.$request->file->getClientOriginalExtension();
       $request->file->move(public_path('upload'), $fileName);
       $insert['name'] = $fileName;
       $insert['catogry'] = $request->catogry;
       $insert['student_id'] = $request->student_id;
       $check = File::insertGetId($insert);
       return response()->json(['success'=>'You have successfully upload file.',
    'catogry'=>$request->catogry,
    'student_id'=>$request->student_id,
    'name'=>$fileName,
    
    ]);
   }







    
}
