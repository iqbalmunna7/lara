<?php

namespace App\Http\Controllers;

use App\Models\student\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;
    public function student()
    {
//        echo Student::$name;
        $this->students = Student::index();
//        echo $this->students;
        return view('student.view-students',['students'=>$this->students]);

    }
}





























//    {
////        return "hello world";
//        $students = new Student();
////        echo $student->name;
//
//        foreach ($students->index() as $student)
//        {
//            echo $student['name'].'<br>';
//        }
//    }
//
//    public function index()
//    {
//        $students = new Student();
//        $students->index();
//    }
//
//}
