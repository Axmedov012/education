<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('admin.application.index');
    }

    public function store(StoreApplicationRequest $request)
    {
        $application =Application::create([
            'user_id' => auth()->id(),
            'name'=>$request->name,
            'phone_number'=>$request->phone_number,
            'description'=>$request->description,
        ]);
        return redirect()->back()->with('success', 'Xabarlar Yuborildi');
    }

}
