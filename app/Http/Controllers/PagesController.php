<?php
namespace App\Http\Controllers;

use App\Events\Event;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\File;
use App\Models\Artist;
use App\Events\ViewPostHandler;
use App\Models\User;
use App\Models\UserFavorite;
use Session;
use Auth;
use DB;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PagesController extends Controller
{

    public function home(Request $request)
    {
        // dd($request->file_id);
        $amountItem = 4;
        $currentPage = 1;
        $category = Category::all();
        $filemix = File::where('category_id', 2)->offset(($currentPage-1)*$amountItem)->limit($amountItem)->get();
        $filetrack = File::where('category_id', 3)->offset(($currentPage-1)*$amountItem)->limit($amountItem)->get();
        $filevideo = File::where('category_id', 1)->offset(($currentPage-1)*$amountItem)->limit($amountItem)->get();
        $artist = Artist::all()->take(5);
        $topmixset = File::all()->where('category_id', '2')->sortByDesc('view_count')->take(5);
        $toptrack = File::all()->where('category_id', '3')->sortByDesc('view_count')->take(10);
        return view('pages.home', [
                                    'category' => $category,
                                    'filemix' => $filemix,
                                    'filetrack' => $filetrack,
                                    'filevideo' => $filevideo,
                                    'artist' => $artist,
                                    'topmixset' => $topmixset,
                                    'toptrack' => $toptrack,
                                    'amountItem' => $amountItem,
                                    'currentPage' => $currentPage,
                                ]);
    }

    public function getMoreListMix(Request $request)
    {
        $inp = $request->all();
        $amountItem = 4;
        $currentPage = 1;
        if (isset($inp['amount_item'])) {
            $amountItem = $inp['amount_item'];
        }
        if (isset($inp['current_page'])) {
            $currentPage = $inp['current_page'];
        }
        $filemix = File::where('category_id', 2)->offset(($currentPage-1)*$amountItem)->limit($amountItem)->get();
        $viewListMix = view('pages.listMix', ['filemix' => $filemix])->render();
        return response()->json([
                'listMix' => $viewListMix,
                'currentPage' => $currentPage,
                'amountItem' => $amountItem,
                ]);
    }

    public function getMoreListTrack(Request $request)
    {
        $inp = $request->all();
        $amountItem = 4;
        $currentPage = 1;
        if (isset($inp['amount_item'])) {
            $amountItem = $inp['amount_item'];
        }
        if (isset($inp['current_page'])) {
            $currentPage = $inp['current_page'];
        }
        $filetrack = File::where('category_id', 3)->offset(($currentPage-1)*$amountItem)->limit($amountItem)->get();
        $viewListTrack = view('pages.listTrack', ['filetrack' => $filetrack])->render();
        return response()->json([
                'listTrack' => $viewListTrack,
                'currentPage' => $currentPage,
                'amountItem' => $amountItem,
                ]);
    }

    public function getMoreListVideo(Request $request)
    {
        $inp = $request->all();
        $amountItem = 4;
        $currentPage = 1;
        if (isset($inp['amount_item'])) {
            $amountItem = $inp['amount_item'];
        }
        if (isset($inp['current_page'])) {
            $currentPage = $inp['current_page'];
        }
        $filevideo = File::where('category_id', 1)->offset(($currentPage-1)*$amountItem)->limit($amountItem)->get();
        $viewListVideo = view('pages.listVideo', ['filevideo' => $filevideo])->render();
        return response()->json([
                'listVideo' => $viewListVideo,
                'currentPage' => $currentPage,
                'amountItem' => $amountItem,
                ]);
    }

    public function authlogout()
    {
        Auth::logout();
        return redirect('home');
    }
    public function authlogin(Request $request)
    {
        $login = $request->all();
        if (Auth::attempt(['email' => $login['email'], 'password' => $login['password']])) {
            return redirect('home');
        } else {
            return redirect()->back();
        }
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $results = File::where('name', 'like', "$keyword%")->get();
        return view('pages.search')->with('keyword', $keyword)->with(['results' => $results]);
    }

    public function authregister(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->level = 'Member';
        $user->status = 'Enabel';
        $user->save();
        return redirect('home');
    }

    public function category($id)
    {
        $topmixset = File::all()->where('category_id', '2')->sortByDesc('view_count')->take(5);
        $toptrack = File::all()->where('category_id', '3')->sortByDesc('view_count')->take(5);
        $topvideo = File::all()->where('category_id', '1')->sortByDesc('view_count')->take(5);
        $listtracks = File::where('category_id', $id)->paginate(5);
        $cate = Category::find($id);
        return view('pages.category', [
            'listtracks' => $listtracks,
            'topmixset' => $topmixset,
            'toptrack' => $toptrack,
            'cate' => $cate,
            'topvideo' => $topvideo,
        ]);
    }

    public function detail($catName, $id)
    {
        $post = File::find($id);
        \Event::fire('pages.detail', $post);
        $cat = Category::where('name', $catName)->get()->first();
        $listconcern = File::where('category_id', $cat->id)->take(4)->get();
        if (Auth::check()) {
            $userfavorite = UserFavorite::where('user_id', '=', Auth::user()->id)->where('file_id',$id)->get()->count();
        } else {
            $userfavorite = null ;
        }

        return view('pages.detail')->with('userfavorite',$userfavorite)->with(['filePlay' => $post, 'listconcern' => $listconcern]);
    }

    public function singer($id)
    {
        $amountItem = 4;
        $currentPage = 1;
        $infosinger = Artist::find($id);
        $filemix = File::where('category_id', 2)->where('artist_id',$id)->offset(($currentPage-1)*$amountItem)->limit($amountItem)->get();
        $filetrack = File::where('category_id', 3)->where('artist_id',$id)->offset(($currentPage-1)*$amountItem)->limit($amountItem)->get();
        $filevideo = File::where('category_id', 1)->where('artist_id',$id)->offset(($currentPage-1)*$amountItem)->limit($amountItem)->get();
        return view('pages.aboutsinger', ['infosinger' => $infosinger,'filemix' => $filemix,'filetrack' => $filetrack ,'filevideo'=> $filevideo]);
    }

    public function profiledisfavorite(Request $request)
    {
        $userfavorite = UserFavorite::where('user_id', '=', Auth::user()->id)
            ->where('file_id', '=', $request['file_id'])
            ->first();

        if (isset($userfavorite)) {
            $text = 'favorite';
            $userfavorite->delete();
        } else {
            $text = 'favorited';
            $favorite = new UserFavorite;
            $favorite->user_id = $request['user_id'];
            $favorite->file_id = $request['file_id'];
            $favorite->save();
        }

        return response()->json([
            'text' => $text,
        ]);
    }

    private function testProfile() {
        $input = [
            'user_id' => 1,
            'file_id' => 3,
        ];
    }

    public function favorite(){
        if (Auth::check()) {
            $userfavorite = UserFavorite::where('user_id', '=', Auth::user()->id)->get()->count();
        } else {
            $userfavorite = null ;
        }
        if (Auth::check()) {
            $filePlay = UserFavorite::where('user_id',Auth::user()->id)->first();
            $filemix = UserFavorite::where('user_id',Auth::user()->id)->get();
            return view('pages.profile', ['filemix' => $filemix, 'filePlay' => $filePlay, 'userfavorite' => $userfavorite]);
        }
    }
    
    public function genre($id)
    {
        $data = File::where('genre_id',$id)->paginate(5);
        return view('pages.genre', ['data' => $data]);
    }
}
