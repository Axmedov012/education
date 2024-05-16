<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\NewEducation;
use App\Models\Teacher;

class PageController extends Controller
{
    public function homePage()
    {
        $courses = Course::all();
        $news = NewEducation::all();
        $teachers = Teacher::where(['id']);
        return view('index',compact(['courses','news','teachers']));
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function contactPage()
    {
        return view('contact');
    }

    public function newsPage()
    {
        $news = NewEducation::paginate(1);
        return view('news',['news' => $news]);
    }

    public function staffPage()
    {
        $teachers = Teacher::all();
        return view('staff',compact('teachers'));
    }

    public function galleryPage()
    {
        return view('gallery');
    }
}
