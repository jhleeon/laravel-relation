<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Student;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Student $student){
        return view('oto.student.profile',['student'=>$student]);
    }


    public function edit( Student $student){
        return view('oto.student.profile-edit',['student'=>$student]);
    }

    public function updateOrCreate(Request $request, Student $student){
        // return $student;
        $student->profile()->updateOrCreate(
            ['student_id' => $student->id],

            [
                'class'=>$request->class,
                'group'=>$request->group,
                'section'=>$request->section,
            ]
        );
        return redirect(route('students.index'))->with('message','profile Update Successfully');
    }
}
