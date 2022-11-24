<?php

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Models\StudentInfo;
use Illuminate\Http\Request;
use Carbon\Carbon;

class StudentInfoController extends Controller
{

    public function create()
    {
       # redirect homepage
       return view('home.studentform');
    }

    public function keep(Request $request){

       # Validate Request
      $request->validate(
         [
             'studentid'=>'required|unique:student_infos,studentid|max:7',
             'name'=>'required',
             'dateofbirth'=>'required',
             'gender'=>'required',
             'nationality'=>'required',
             'education'=>'required'
         ]
         );
         
       # Gets user input
       $studentid = $request->input('studentid');
       $name = $request->input('name');
       $dateofbirth = $request->input('dateofbirth');
       $gender = $request->input('gender');
       $nationality = $request->input('nationality');
       $education = $request->input('education');

       $studentinfo = new StudentInfo;
       $studentinfo->studentid = $studentid;
       $studentinfo->name = $name;
       $studentinfo->dateofbirth = $dateofbirth;
       $studentinfo->gender = $gender;
       $studentinfo->nationality = $nationality;
       $studentinfo->education = $education;

       # Store user info into mysql database
       $studentinfo->save();

        # redirect quiz page
       return redirect('/quiz');
    }
}




