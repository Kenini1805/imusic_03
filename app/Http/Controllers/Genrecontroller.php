<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class Genrecontroller extends Controller
{
    //
    public function getlist()
    {
        $genre = Genre::paginate(10);
        return view('admin/genre/list', ['genre' => $genre]);
    }
    public function postadd(Request $request)
    {
        $genre = new Genre;
        $genre->name = $request->name;
        $genre->save();
        return redirect('admin/genre/list');
    }
    public function getedit($id)
    {
        $genre = Genre::find($id);
        return view('admin/genre/edit', ['genre' => $genre]);
    }
    public function postedit(Request $request, $id)
    {
        $genre = Genre::find($id);
        $genre->name = $request->name;
        $genre->save();
        return redirect('admin/genre/list');
    }
    public function getdelete($id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect('admin/genre/list');
    }
}
