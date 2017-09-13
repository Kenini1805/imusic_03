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
        $artist->slug_name =  $this->str_slug($request->name, '-');
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
        $artist->name = $request->name;
        $artist->slug_name =  $this->stripUnicode($request->name);
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
}
