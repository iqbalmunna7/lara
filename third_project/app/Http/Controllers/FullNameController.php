<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\FullNameController;

class FullNameController extends Controller
{
    protected $result;
    public function getFullName(Request $request)
    {
        return $request->first_name.' '.$request->last-name;
//        return redirect()->back()->with('fullName', $this->result);
        return view('fullName.full-name [fullName=> $this->$result]');

    }

}
