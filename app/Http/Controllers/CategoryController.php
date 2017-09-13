<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getlist()
    {
        $category = Category::paginate(10);
        return view('admin.category.list', ['category' => $category]);
    }

    public function postadd(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category/list');
    }

    public function getedit($id)
    {
        $category =  Category::find($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function postedit(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category/list');
    }

    public function getdelete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/category/list');
    }
}
