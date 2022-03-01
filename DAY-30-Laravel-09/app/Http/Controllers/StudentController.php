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

    public function manage()
    {
//        return Student::all();
//        return Student::orderBy('id', 'desc')->get(); // get returns all row, fast returns one row
//        return Student::orderBy('id', 'desc')->first();
//        return Student::orderBy('id', 'desc')->take(2)->get(); //if we want last two row
//        return Student::orderBy('id', 'desc')->skip(1)->first();
//        return Student::orderBy('id', 'desc')->skip(1)->take(5)->get();

        $this->students = Student::orderBy('id', 'desc')->get(); //method chaining
        return view('manage-student', [
            'students' => $this->students,
        ]);
    }

    public function edit($id)
    {
//        return $id;

        $this->student = Student::find($id);
//        return $this->student;
        return view('edit-student', ['student' => $this->student]);
    }

    public function update(Request $request, $id)
    {
//        return $id;
//        return $request->all();

        $this->student = Student::find($id);
        $this->student->name   = $request->name;
        $this->student->email  = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();

        return redirect('/manage-student')->with('message', 'Student information updated successfully!');
    }

    public function delete($id)
    {
        $this->student = Student::find($id);
        $this->student->delete();
        return redirect('/manage-student')->with('message', 'Student information deleted successfully!');

    }
}
