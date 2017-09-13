<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\User;

class UserController extends Controller
{
    //
    public function getlist()
    {
        $user = User::all();
        return view('admin.user.list', ['user' => $user]);
    }

    public function getadd()
    {
        return view('admin.user.add');
    }

    public function postadd(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->status = $request->status;
        $user->save();
        return redirect('admin/user/list');
    }

    public function getedit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', ['user' => $user]);
    }

    public function postedit(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = $request->level;
        $user->status = $request->status;
        $user->save();
        return redirect('admin/user/list');
    }

    public function getdelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/list');
    }
}
