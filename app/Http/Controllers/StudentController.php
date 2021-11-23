<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentController extends Controller
{
    public function index(){
        $url=url('/student');
        $data=compact('url');
        return view('student')->with($data);
    }
    public function store(Request $request){
      
        $student=new Students;
        $student->student_name=$request['name'];
        $student->email=$request['email'];
        $student->gender=$request['gender'];
        $student->student_address=$request['address'];
        $student->class=$request['class'];
        $student->dob=$request['date'];
        $student->save();

        return redirect('/student');
    }

    public function view(){
        $students=Students::all();
        $data=compact('students');
        return view('student-view')->with($data);

    }

    // public function delete($id){
    //     Students::find($id)->delete();
    //     return redirect()->back();
    // }
    public function delete($id){
       $student= Students::find($id);
        if(!is_null($student)){
            $student->delete();
        }
        return redirect('/student');
    }

    public function edit($id){
        $student=Students::find($id);
        if(is_null($student)){
            //not found
            return redirect('/student');
        }else{
            // found
            $url=('/student/update')."/".$id;
            $data=compact('student', 'url');
            return view('student')->with($data);
        }
    }
}
