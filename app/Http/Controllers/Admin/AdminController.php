<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\NewEducation;
use App\Models\Teacher;

class AdminController extends Controller
{

    public function dashboard()
    {
        $news = NewEducation::all();
        $cources = Course::all();
        $teachers = Teacher::all();
        return view('admin.dashboard',
            compact('news','cources','teachers'));
    }



}
