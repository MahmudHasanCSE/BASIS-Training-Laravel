<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
//    protected $name;
//    protected $city;
    protected $students;
    protected $student;

    public function index()
    {
        return view('add-student');
    }

    public function create(Request $request)
    {
//        return $request->all();
        $this->student = new Student();
        $this->student->name   = $request->name;
        $this->student->email  = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();

//        return "success"; one time session 'message' which will destroy afterwards
        return redirect()->back()->with('message', 'Student information saved successfully!');
    }
}
