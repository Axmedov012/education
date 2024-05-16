<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function allUserPage()
    {
        $users= User::all();
        return view('admin.user.allUser',['users'=>$users]);
    }

    public function search(Request $request)
    {
        $search = $request->search;
        $users = User::where('name', 'like', "%{$search}%")->orWhere('email', 'like', "%{$search}%")->get();
        return view('admin.user.allUser', compact('users','search'));
    }

    public function editUserPage($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.editUser',['user' => $user]);
    }

    public function updateUserPost(UserRequest $request)
    {
        $update = User::find($request['userId']);

        $update->name = $request->name;
        $update->email = $request->email;
        $update->update();
        return redirect()->route('allUserPage');

    }

    public function deleteUserPost($id)
    {
        $delete = User::where('id',$id)->first();
        $delete->delete();
        return redirect()->back()->with(['delete'=>'Delete User Post']);
    }


}
