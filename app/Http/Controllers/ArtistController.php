<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function getlist()
    {
        $artist = Artist::paginate(10);
        return view('admin.artist.list', ['artist' => $artist]);
    }

    public function postadd(Request $request)
    {
        $artist = new Artist;
        $artist->name = $request->name;
        $artist->introduce = $request->intro;
        $artist->slug_name = str_slug($request->name, '-');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move('storage/fileupload/image', 'fileupload/image/'.$file->getClientOriginalName());
            $artist->image = 'fileupload/image/'.$file->getClientOriginalName();
            $artist ->save();
            return redirect('admin/artist/list');
        }
    }

    public function getedit($id)
    {
        $artist =  Artist::find($id);
        return view('admin.artist.edit', ['artist' => $artist]);
    }

    public function postedit(Request $request, $id)
    {
        $artist =  Artist::find($id);
        $artist->introduce = $request->intro;
        $artist->name = $request->name;
        $artist->slug_name = str_slug($request->name, '-');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $file->move('storage/fileupload/image', 'fileupload/image/'.$file->getClientOriginalName());
            $artist->image = 'fileupload/image/' .$file->getClientOriginalName();
            $artist ->save();
            return redirect('admin/artist/list');
        }
    }

    public function getdelete($id)
    {
        $artist = Artist::find($id);
        $artist->delete();
        return redirect('admin/artist/list');
    }
    public function searchadmin(Request $request)
    {
        $keyword = $request->keyword;
        $artist = Artist::where('name', 'like', "$keyword%")->get();
        return view('admin.artist.search')->with('keyword', $keyword)->with(['artist' => $artist]);
    }
}
