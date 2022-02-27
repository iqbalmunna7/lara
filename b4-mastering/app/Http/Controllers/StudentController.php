<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
   public  function student()
   {
//       $student = new Student();
//       echo $student->name;
       foreach (students::index() as $student)
       {
           echo $student['name'].'<br/>';
       }
   }
   public function index()
   {
       $
   }

}
