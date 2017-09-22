<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Category;
use App\Models\File;
use App\Models\Genre;
use App\Models\User;
use App\Model\Comment;
use Auth;

class FileController extends Controller
{
    public function getlist()
    {
        $file = File::paginate(10);
        $user = User::all();
        return view('admin.file.list', [
            'file' => $file,
            'users' => $user,
        ]);
    }

    public function getFormAdd()
    {
        $category = Category::all();
        $genre = Genre::all();
        $artist = Artist::all();
        $user  = User::all();
        return view('admin/file/add', [
            'category' => $category,
            'genre' => $genre,
            'artist' => $artist,
            'user' => $user,
        ]);
    }

    public function postFormAdd()
    {
        $category = Category::all();
        $genre = Genre::all();
        $artist = Artist::all();
        $user  = User::all();
        return view('admin/file/edit', [
            'category' => $category,
            'genre' => $genre,
            'artist' => $artist,
            'user' => $user,
        ]);
    }

    public function postadd(Request $request)
    {
        $file = new File;
        $file->name = $request->name;
        $file->slug_name = str_slug($request->name, '-');
        $fileadd = $request->file_add;
        $fileadd->move('storage/fileupload/file', 'fileupload/file/'.$fileadd->getClientOriginalName());
        $file->path = 'fileupload/file/' .$fileadd->getClientOriginalName();
        if ($request->file_add->getClientOriginalExtension() == 'mp4') {
            $imagevideo = $request->file_image_video;
            $imagevideo->move('storage/fileupload/image_video', 'fileupload/image_video/'
                .$imagevideo->getClientOriginalName());
            $file->path_image_video = 'fileupload/image_video/'.$imagevideo->getClientOriginalName();
        }
        $file->category_id = $request->cate;
        $file->genre_id = $request->gen;
        $file->artist_id = $request->art;
        $file->user_id =  Auth::user()->id;
        $file->view_count = $request->view_count;
        $file->viewcountweek = $request->view_count_week;
        $file->lyrics = $request->lyrics;
        $file->save();
        return redirect('admin/file/list');
    }

    public function getedit($id)
    {
        $file =  File::find($id);
        $category = Category::all();
        $genre = Genre::all();
        $artist = Artist::all();
        $user  = User::all();
        return view('admin.file.edit', [
            'file' => $file,
            'category' => $category,
            'genre' => $genre,
            'artist' => $artist,
            'user' => $user,
        ]);
    }

    public function postedit(Request $request, $id)
    {
        $file = File::find($id);
        $file->name = $request->name;
        $file->slug_name = str_slug($request->name, '-');
        $fileadd = $request->file_add;
        $fileadd->move('storage/fileupload/file', 'fileupload/file/' .$fileadd->getClientOriginalName());
        $file->path = 'fileupload/file/' .$fileadd->getClientOriginalName();
        if ($request->file_add->getClientOriginalExtension() == 'mp4') {
            $imagevideo = $request->file_image_video;
            $imagevideo->move('storage/fileupload/image_video', 'fileupload/image_video/'
                .$imagevideo->getClientOriginalName());
            $file->path_image_video = 'fileupload/image_video/' .$imagevideo->getClientOriginalName();
        }
        $file->category_id = $request->cate;
        $file->genre_id = $request->gen;
        $file->artist_id = $request->art;
        $file->user_id =  Auth::user()->id;
        $file->view_count = $request->view_count;
        $file->viewcountweek = $request->view_count_week;
        $file->lyrics = $request->lyrics;
        $file->save();
        return redirect('admin/file/list');
    }

    public function getdelete($id)
    {
        $file = File::find($id);
        $file->delete();
        return redirect('admin/file/list');
    }

    public function searchadmin(Request $request)
    {
        $keyword = $request->keyword;
        $file = File::where('name', 'like', "$keyword%")->get();
        return view('admin.file.search')->with('keyword', $keyword)->with(['file' => $file]);
    }
}
