<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourceRequest;
use App\Models\Course;

class AdminCourceController extends Controller
{

    public function allCourcePage()
    {
        $cources = Course::all();
        return view('admin.cource.allCource',['cources'=>$cources]);
    }

    public function addCourcePage()
    {
        return view('admin/cource.addCource');
    }


    public function addCourcePost(CourceRequest $request)
    {
        $cource = new  Course();
        if ($request->hasFile('image')) {
            $courceImage = $request->file('image');
            $courceImageName = rand() . "_" . $courceImage->getClientOriginalName();
            $courceImage->move(public_path('asset/img/'), $courceImageName);
        }

            $cource->title = $request->title;
            $cource->description = $request->description;
            $cource->price = $request->price;
           if ($request->hasFile('image')) {
               $cource->image = $courceImageName;
           }

        if ($request->user()->cource()->save($cource)) {

            return redirect()->route('allCourcePage');
        }
        return  redirect()->route('dashboard');
    }


    public function editCourcePage($id)
    {
               // find or fail malumotning id olish
        $course = Course::findOrFail($id);
        return view('admin/cource.edit',['course' => $course]);
    }

    public function updateCourcePost( CourceRequest $request)
    {

        $update = Course::find($request['courceId']);

        if($update->image != "" ){
            $updateImage = public_path('asset/img/'.$update->image);

            // delete image
                unlink('asset/img/'.$update->image);
        }

        $updateImage = $request->file('image');
        $updateCourceImage = rand()."_".$updateImage->getClientOriginalName();
        $updateImage->move(public_path('asset/img/'),$updateCourceImage);

        $update->title = $request->title;
        $update->price = $request->price;
        $update->description = $request->description;
        $update->image = $updateCourceImage;
        $update->update();
        return redirect()->route('allCourcePage');
    }


    public function deleteCourcePost($id)
    {
        $delete = Course::where('id',$id)->first();

            if($delete->image != ""){
               $deleteImage = public_path('asset/img/'.$delete->image);
               unlink('asset/img/'.$delete->image);
            }

        $delete->delete();
        return redirect()->back()->with(['delete'=>'Delete Course Post']);
    }

}
