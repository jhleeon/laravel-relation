<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('oto.student.index', ['students' => $students]);
    }


    public function create()
    {
        return view('oto.student.create');
    }

    public function store(Request $request)
    {
        Student::create([
            'name' => $request->name,
            'roll' => $request->roll
        ]);
        return redirect(route('students.index'))->with('message', 'Student created successfully');
    }

    public function edit(Student $student)
    {

        return view('oto.student.edit', ['student' => $student]);
    }

    public function update(Student $student, Request $request)
    {
        $student->update([
            'name' => $request->name,
            'roll' => $request->roll
        ]);
        return redirect(route('students.index'))->with('message', 'Updated Successfully');
    }


    public function show(Student $student)
    {
        return view('oto.student.show', ['student' => $student]);
    }



    public function delete(Student $student)
    {
        /* Beacuse of onDelete('cascade') into migration 
            the relational data also delted with parent table*/

        $student->delete();
        return redirect(route('students.index'))->with('message', 'Deleted Successfully');
    }
}
