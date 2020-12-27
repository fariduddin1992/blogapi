<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Helpers\StringHelper;
use Illuminate\Support\Facades\Redirect;

class SubcategoryController extends Controller
{
    public function index()
    {
        

    }
    public function create()
    {
        $categoryList = Category::all();
        return view('backend.Subcategory.Create',compact('categoryList'));
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            
        ]);
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        $subCategory = new Subcategory();
        $subCategory->category_id = $request->category_id;
        $subCategory->name = $request->subCatname;
        $subCategory->slug = StringHelper::createSlug($request->subCatname, 'subCategory', 'name');
        $subCategory->save();
        return Redirect::to('admin/subcategory/create')->with($notification);
    }
    public function edit($id)
    {
       
    }
    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
        

    }
}
