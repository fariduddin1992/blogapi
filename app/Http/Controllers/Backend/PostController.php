<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Helpers\StringHelper;
use App\Helpers\UploadHelper;
use App\Models\Category;
use App\Models\PostTags;
use App\Models\Subcategory;
use App\Models\Tag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DOMDocument;


class PostController extends Controller
{
    public function index()
    {
        $postList = Post::all();
        return view('backend.post.index', compact('postList'));
    }
    public function create()
    {
        $category = Category::all();
        $SubCategory = Subcategory::all();
        $tag = Tag::all();
        return view('backend.post.Create', compact('category', 'SubCategory', 'tag'));
    }
    public function getSubCategories(Request $request, $id)
    {

        if ($request->ajax()) {
            //$sector = Subcategory::find($id);
            $sector = DB::table('subcategories')
                ->select('id', 'name')
                ->where('category_id', '=', $id)
                ->get();

            return $sector;
            //return Response::json( $sector->category );

        }
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required |unique:posts'
        ]);
        $notification = array(
            'message' => 'Post created successfully!',
            'alert-type' => 'success'
        );
        $detail = $request->description;

        // $dom = new \DOMDocument();
        // $dom->preserveWhiteSpace = false;
        // $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOERROR | LIBXML_NOWARNING);
        // $images = $dom->getelementsbytagname('img');

        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        // foreach ($images as $k => $img) {
        //     $data = $img->getattribute('src');

        //     list($type, $data) = explode(';', $data);
        //     list(, $data)      = explode(',', $data);

        //     $data = base64_decode($data);
        //     $image_name = time() . $k . '.png';
        //     //$path = public_path() .'/images/posts/'. $image_name;
        //     $path = 'public/images/post_description_image/' . $image_name;

        //     file_put_contents($path, $data);

        //     $img->removeattribute('src');
        //     $img->setattribute('src', $image_name);
        // }


        $post = new Post();

        $post->title = $request->title;
        $post->price = $request->price;
        $post->category_id = $request->category_id;
        $post->subcategory_id = $request->subcategory_id;
        $post->description = $detail;
        $post->user_id = 0;
        $post->meta_description = $request->meta_description;
        $post->is_approved = 1;
        $post->is_featured = $request->is_featured;
        // $post->slug = StringHelper::createSlug($request->title,'Post','slug','-');
        $post->slug = preg_replace('/\s+/u', '-', trim($request->title));
        if (!is_null($request->image)) {

            $post->image = UploadHelper::upload('image', $request->file('image'), str_slug($request->tilte, '-') . '-' . time(), 'public/images/post_images');
        }


        // dd($post->slug = StringHelper::createSlug($request->title,'Post','slug','-'));


        $postSave = $post->save();


        if ($postSave) {
            if ($request->tag != "") {
                $getId = $post->id;
                for ($i = 0; $i < count($request->tag); $i++) {
                    $PostTags = new PostTags();
                    $PostTags->post_id = $getId;
                    $PostTags->tag_id = $request->tag[$i];
                    $PostTags->save();
                }
            }
        }
        return Redirect::to('admin/post/add')->with($notification);
    }


    public function edit($id)
    {


        $post = Post::where('id', $id)->first();
        $category = Category::all();
        $subCategory = Subcategory::all();
        $tag = Tag::all();

        return view('backend.post.edit', compact('post', 'category', 'subCategory', 'tag'));
    }
    public function update(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->first();


        $notification = array(
            'message' => 'Post Updated successfully!',
            'alert-type' => 'success'
        );
        // $detail = $request->description;
        // $dom = new \DOMDocument();
        // $dom->preserveWhiteSpace = false;
        // $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOERROR | LIBXML_NOWARNING);
        // $images = $dom->getelementsbytagname('img');

        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        // foreach ($images as $k => $img) {
        //     $data = $img->getattribute('src');

        //     list($type, $data) = explode(';', $data);
        //     list(, $data)      = explode(',', $data);
        //     $data = base64_decode($data);
        //     $image_name = time() . $k . '.png';
        //     $path = public_path() . '/images/posts/' . $image_name;
        //     file_put_contents($path, $data);

        //     $img->removeattribute('src');
        //     $img->setattribute('src', $image_name);
        // }



        $post->title = $request->title;
        $post->price = $request->price;
        $post->category_id = $request->category_id;
        $post->subcategory_id = $request->subcategory_id;
        $post->meta_description = $request->meta_description;
        $post->description = $request->description;;
        $post->user_id = 1;
        $post->is_featured = 1;


        if (!is_null($request->image)) {

            $post->image = UploadHelper::update('image', $request->file('image'), str_slug($request->tilte, '-') . '-' . time(), 'public/images/post_images', $post->image);
        }
        $postSave = $post->save();
        if ($postSave) {
            if ($request->tag != "") {
                $getId = $post->id;
                for ($i = 0; $i < count($request->tag); $i++) {
                    $PostTags = new PostTags();
                    $PostTags->post_id = $getId;
                    $PostTags->tag_id = $request->tag[$i];
                    $PostTags->save();
                }
            }
        }
        return Redirect::to('admin/post/add');
    }
    public function destroy($id)
    {
    }
    public function PostApproved($id)
    {

        $postList = Post::all();
        $post = Post::where('id', $id)->first();

        if ($post->is_approved == 0) {
            $post->is_approved = 1;
        } else {
            $post->is_approved = 0;
        }
        $postSave = $post->save();
        //return view('backend.post.index',compact('postList'));
        return redirect()->route('post.index')->with(['data' => $postList]);
    }
}
