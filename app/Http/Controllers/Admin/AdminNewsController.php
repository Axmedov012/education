<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\NewEducation;

class AdminNewsController extends Controller
{
    public function allNewsPage()
    {
        $news = NewEducation::all();
        return view('admin/news.allNews',['news' => $news]);
    }

    public function addNewsPage()
    {
        return view('admin/news.addNews');
    }

    public function addNewsPost(NewsRequest $request)
    {
          $news = new  NewEducation();
        if ($request->hasFile('image')) {
          $newsImage = $request->file('image');
          $newImageName = rand()."_".$newsImage->getClientOriginalName();
          $newsImage->move(public_path('asset/newsImg/'),$newImageName);
        }
          $news->title = $request->title;
          $news->description = $request->description;
         if ($request->hasFile('image')) {
             $news->image = $newImageName;
         }

        if($request->user()->news()->save($news)){
            return redirect()->route('allNewsPage');
        }
        return redirect()->route('dashboard');
    }



    public function editNewsPage($id)
    {
               // find or fail malumotning id olish
        $news = NewEducation::findOrFail($id);
        return view('admin/news.edit',['news' => $news]);
    }



    public function updateNewsPost( NewsRequest $request)
    {
        $update = NewEducation::find($request['newsId']);

        if($update->image != "" ){
            $updateImage = public_path('asset/newsImg/'.$update->image);

            // delete image
                unlink('asset/newsImg/'.$update->image);
        }

        $updateImage = $request->file('image');
        $updateNewsImage = rand()."_".$updateImage->getClientOriginalName();
        $updateImage->move(public_path('asset/newsImg/'),$updateNewsImage);

        $update->title = $request->title;
        $update->description = $request->description;
        $update->image = $updateNewsImage;
        $update->update();
        return redirect()->route('allNewsPage');
    }

    public function deleteNewsPost($id)
    {
        $delete = NewEducation::where('id',$id)->first();

            if($delete->image != ""){
               $deleteImage = public_path('asset/newsImg/'.$delete->image);
               unlink('asset/newsImg/'.$delete->image);
            }

        $delete->delete();
        return redirect()->back()->with(['delete'=>'Delete News Post']);
    }


}
