<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Application;
use Illuminate\Http\Request;

class AnswerController extends Controller
{

    public function index()
    {
        $applications = Application::all();
        return view('admin.answer.index',compact('applications'));
    }

    public function create(Application $application)
    {
        return view('admin.answer.create',['application'=>$application]);
    }

    public function store(Application $application, Request $request)
    {
        $request->validate(['body' => 'required',]);
       $application->answer()->create([
        'body'=>$request->body,
    ]);
        return redirect()->route('answer.index')->with('success','Muvaffaqiyatli Javob berildi');
    }
}
