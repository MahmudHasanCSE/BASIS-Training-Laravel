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
//        $this->name = 'BASIS';
//        $this->city = 'Dhaka';
//        return view('all', ['data' => $this->name]); // array
//        return view('all')->with('data', $this->name);  // with
//        return view('all')->with([
//            'data' => $this->name,
//            'name' => $this->city,
//        ]);

//        return view('all', compact('name')); // compact

//        $this->students = Student::getAllStudent();
//        return view('all', [
//           'students' => $this->students,
//        ]);

        $this->student = new Student();
        $this->student->newStudent();
        return 'success';
    }
}
