<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($category, $subId, $id, $slug)
    {

        // get the current user
        $post = Post::find($id);
        $previous = Post::where('id', '<', $post->id)->max('id');
        $next = Post::where('id', '>', $post->id)->min('id');



        $lastestPost = Post::where('is_approved', 1)->orderBy('id', 'desc')->limit(10)->get();
        $popularPosts = Post::limit(5)
            ->where('total_view', '>', 0)
            ->orderBy('total_view', 'asc')
            ->get();

        // $post = Post::where('slug', $slug)->first();
        $Categorypost = Category::all();
        $subCateogryPosts = Post::where('subcategory_id', '=', $subId)->get();


        $post->increment('total_view');
        if ($post) {

            // Get related Posts
            $related_posts = $post->category->posts()
                ->where('id', '!=', $post->id)
                ->limit(5)
                ->get();

            // Post Tags
            $post_tags = $post->tags;
            return view('frontend.posts.show', compact('post', 'related_posts', 'subCateogryPosts', 'post_tags', 'lastestPost', 'popularPosts', 'previous', 'next'));
        }
        return redirect()->route('index');
    }

    public function getCategoryPost($category)
    {
        $category_id = Category::where('name', '=', $category)->firstOrFail();
        $lastestPost = Post::orderBy('id', 'desc')->limit(10)->get();
        $popularPosts = Post::limit(5)
            ->where('total_view', '>', 0)
            ->orderBy('total_view', 'asc')
            ->get();
        //$post_category = $category_id->posts::where('category_id',$category_id->id)->get();
        $post_category = Post::where('category_id', '=', $category_id->id)->get();

        if (count($post_category) > 0) {
            return view('frontend/posts/post_catgory', compact('post_category', 'lastestPost', 'popularPosts'));
        } else {
            return redirect('/');
        }
    }

    public function tutorialPost($category, $subcategoryId, $id, $slug)
    {
        $subCateogryPost = Post::Where('slug', '=', $slug)
            ->orderBy('id', 'desc')
            ->paginate(1);
        $sidebarMenu = Post::where('subcategory_id', '=', $subcategoryId)
            ->orderBy('id', 'desc')
            ->get();
        $lastestPost = Post::orderBy('id', 'desc')->limit(10)->get();
        $popularPosts = Post::limit(5)
            ->where('total_view', '>', 0)
            ->orderBy('total_view', 'asc')
            ->get();

        return view('frontend.studyPage', compact('subCateogryPost', 'sidebarMenu', 'lastestPost', 'popularPosts'));
    }

    public function phoneCategoryShow($name)
    {
        $Categorypost = Category::all();
        $category_id = Subcategory::where('name', '=', $name)->firstOrFail();
        $post_category = Post::where('subcategory_id', '=', $category_id->id)->paginate(4);

        if (count($post_category) > 0) {
            return view('frontend/posts/phoneCategory', compact('post_category', 'Categorypost'));
        } else {
            return redirect('/');
        }
    }

    public function phonePostShow($category, $subcategory, $id, $slug)
    {

        $lastestPost = Post::where('is_approved', 1)->orderBy('id', 'desc')->limit(10)->get();

        $popularPosts = Post::limit(5)
            ->where('total_view', '>', 0)
            ->orderBy('total_view', 'asc')
            ->get();

        $post = Post::where('slug', $slug)->first();
        $Categorypost = Category::all();
        $post->increment('total_view');
        if ($post) {

            // Get related Posts
            $related_posts = $post->category->posts()
                ->where('id', '!=', $post->id)
                ->limit(5)
                ->get();

            // Post Tags
            $post_tags = $post->tags;
            return view('frontend.posts.show', compact('post', 'related_posts', 'post_tags', 'lastestPost', 'popularPosts', 'Categorypost'));
        }
        return redirect()->route('index');
    }
}
