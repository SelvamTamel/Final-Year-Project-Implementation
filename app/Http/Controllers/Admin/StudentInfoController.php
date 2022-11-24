<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentInfo;

class StudentInfoController extends Controller
{
    public function view()
    {
        $studentinfo = StudentInfo::all();
        return view('admin.studentinfo', compact('studentinfo'));
    }
}
