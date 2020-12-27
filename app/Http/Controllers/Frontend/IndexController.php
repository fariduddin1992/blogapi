<?php


namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Subcategory;
use App\Models\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{

    public function index()
    {
        $titleCategory = Category::orderBy('id', 'desc')->take(5)->get();
        $lastestPost = Post::where('is_approved', 1)->orderBy('id', 'desc')->limit(10)->get();
        $popularPosts = Post::limit(5)
            ->where('total_view', '>', 0)
            ->where('is_approved', 1)
            ->orderBy('total_view', 'asc')
            ->get();
        $tag = Tag::limit(10)
            ->orderBy('priority', 'asc')
            ->get();
        $posts = Post::orderBy('id', 'desc')->where('is_approved', 1)->get();
        $Categorypost = Category::all();
        $Subcategorypost = Subcategory::all();
        $bangladeshPost = Post::where('category_id', 1)->where('is_approved', 1)->orderBy('id', 'desc')->get();
        $educationPost = Post::where('category_id', 2)->where('is_approved', 1)->orderBy('id', 'desc')->get();
        $receipePost = Post::where('category_id', 3)->where('is_approved', 1)->orderBy('id', 'desc')->get();
        $techonologyPost = Post::where('category_id', 4)->where('is_approved', 1)->orderBy('id', 'desc')->get();
        $jobPost = Post::where('category_id', 6)->where('is_approved', 1)->orderBy('id', 'desc')->get();
        return view('index', compact('lastestPost', 'tag',  'popularPosts', 'Categorypost',  'bangladeshPost', 'titleCategory', 'posts',  'techonologyPost', 'jobPost', 'educationPost', 'receipePost', 'Subcategorypost'));
    }

    public function singlePageShow($slug)
    {
        //$singlePostData = DB::table('posts')->where('slug', $slug)->first();
        //return view('frontend/singlePage',compact('singlePostData'));
    }
    public function studyPage()
    {
        //$singlePostData = DB::table('posts')->where('slug', $slug)->first();
        //return view('frontend/singlePage',compact('singlePostData'));
        return view('frontend.studyPage');
    }
    public function privacy()
    {
        return view('frontend.privacy');
    }

    public function getSubCategoryPost($subcategory, $id)
    {
        $sidebarMenu = Post::where('subcategory_id', '=', $id)
            ->orderBy('id', 'desc')
            ->get();
        $subCateogryPost = Post::where('subcategory_id', '=', $id)->orWhere('is_approved', 1)->get();
        $lastestPost = Post::orderBy('id', 'desc')->limit(10)->get();
        $popularPosts = Post::limit(5)
            ->where('total_view', '>', 0)
            ->orderBy('total_view', 'asc')
            ->get();
        return view('frontend.studyPage', compact('sidebarMenu', 'subCateogryPost', 'lastestPost', 'popularPosts'));
    }
    public function categoryPost($category, $id, $subcategory, $subcategoryId)
    {
        $sidebarMenu = Post::where('subcategory_id', '=', $id)
            ->orderBy('id', 'desc')
            ->get();
        $subCateogryPosts = Post::where('subcategory_id', '=', $subcategoryId)->where('is_approved', 1)->paginate(14);
        $lastestPost = Post::orderBy('id', 'desc')->limit(10)->get();
        $popularPosts = Post::limit(5)
            ->where('total_view', '>', 0)
            ->orderBy('total_view', 'asc')
            ->get();
        $Categorypost = Category::all();

        return view('frontend/posts/phoneCategory', compact('sidebarMenu', 'subCateogryPosts', 'lastestPost', 'popularPosts', 'Categorypost'));
    }
}
