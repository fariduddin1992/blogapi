<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{



    public function index()
    {
        $post = Post::with('category')->with('subcategory')->with('tags')->where('is_approved',1)->get();
        return $post;
    }
    public function showPost($slug)
    {
        $post = Post::with('category')
                ->with('subcategory')
                ->with('tags')
                ->where('is_approved',1)
                ->where('slug',$slug)
                ->get();
        return $post;
    }
    public function shareMenu()
    {
        $category = Category::with('subcategories')->get();
        return $category;
    }
    public function Subcategory()
    {
        $category = Subcategory::where('is_approved',1)->get();
        return $category;
    }
    public function popularPost()
    {
        $popularPostData = Post::with('category')
            ->select('id','title','total_view')
            ->with('subcategory')
            ->with('tags')
            ->where('is_approved',1)
            ->where('total_view','>',0)
            ->orderby('total_view','desc')
            ->get();
        return $popularPostData;
    }

    public function postShowByCategory()
    {

    }
}
