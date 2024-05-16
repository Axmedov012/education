<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;

class AdminTeacherController extends Controller
{
    public function allTeacherPage()
    {
        $teachers = Teacher::all();
        return view('admin/teacher.allTeacher',compact('teachers'));
    }

    public function addTeacherPage(){
        return view('admin/teacher.addTeacher');
    }

    public function addTeacherPost(TeacherRequest $request)
    {
       if($request->hasFile('image')){

          $teacherImage = $request->file('image');
          $newTeacherImage = rand()."_".$teacherImage->getClientOriginalName();
          $teacherImage->move(public_path('asset/teacherImg/'),$newTeacherImage);
        }

        $teacher = new  Teacher();
          $teacher->name = $request->name;
          $teacher->job = $request->job;
          $teacher->description = $request->description;
          $teacher->image = $newTeacherImage ?? null;

        if($request->user()->teacher()->save($teacher)){

            return redirect()->route('allTeacherPage');
        }
        return redirect()->route('dashboard');
    }

    public function editTeacherPage($id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('admin/teacher.edit',['teachers' => $teachers]);
    }


    public function updateTeacherPost( TeacherRequest $request)
    {
        $update = Teacher::find($request['teacherId']);

        if($update->image != "" ){
            $updateImage = public_path('asset/teacherImg/'.$update->image);

            // delete image
                unlink('asset/teacherImg/'.$update->image);
        }

        $updateImage = $request->file('image');
        $updateTeacherImage = rand()."_".$updateImage->getClientOriginalName();
        $updateImage->move(public_path('asset/teacherImg/'),$updateTeacherImage);

        $update->name = $request->name;
        $update->job = $request->job;
        $update->description = $request->description;
        $update->image = $updateTeacherImage;
        $update->update();
        return redirect()->route('allTeacherPage');
    }

    public function deleteTeacherPost($id)
    {

        $delete = Teacher::where('id',$id)->first();

            if($delete->image != ""){
               $deleteImage = public_path('asset/teacherImg/'.$delete->image);
               unlink('asset/teacherImg/'.$delete->image);
            }

        $delete->delete();
        return redirect()->back()->with(['delete'=>'Delete Teacher Post']);
    }

}
