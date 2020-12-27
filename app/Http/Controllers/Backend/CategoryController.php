<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Helpers\StringHelper;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        
    }
    public function create()
    {
        $category = Category::all();
        return view('backend.Category.Create',compact('category'));
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required | unique:categories'
        ]);
        $notification = array(
            'message' => 'Category created successfully!',
            'alert-type' => 'success'
        );
        $category = new Category();
        $category->name = $request->name;
        $category->slug = StringHelper::createSlug($request->name, 'category', 'name');
        $category->save();
        return Redirect::to('admin/category/create')->with($notification);
    }
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('backend.Category.CategoryEdit',compact('category'));
    }
    public function update(Request $request, $id)
    {
        $category = Category::where('id', $id)->first();
        $validateData = $request->validate([
            'name'=>'required | unique:categories'
        ]);
        $notification = array(
            'message' => 'Category Update successfully!',
            'alert-type' => 'success'
        );
        
        $category->name = $request->name;
        $category->slug = StringHelper::createSlug($request->name, 'category', 'name');
        $category->save();
        return Redirect::to('admin/category/create')->with($notification);

    }
    public function destroy($id)
    {
        $notification = array(
            'message' => 'Delete successfully!',
            'alert-type' => 'success'
        );
       $category = Category::find($id);
       $category->delete();
       return Redirect::to('admin/category/create')->with($notification);


    }

}
