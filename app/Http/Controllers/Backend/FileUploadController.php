<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Helpers\StringHelper;
use App\Helpers\UploadHelper;
use App\Models\Fileupload;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index()
    {
        $fileUpload = Fileupload::all();
        return view('backend.fileUpload.index', compact('fileUpload'));
    }
    public function create()
    {

        return view('backend.fileUpload.create');
    }

    public function store(Request $request)
    {


        $validateData = $request->validate([
            'title' => 'required |unique:posts'
        ]);
        $notification = array(
            'message' => 'File Uplaod created successfully!',
            'alert-type' => 'success'
        );




        $fileupload = new Fileupload();

        $fileupload->title = $request->title;
        // $fileupload->slug = StringHelper::createSlug($request->title,'fileupload','slug','-');
        $fileupload->slug = preg_replace('/\s+/u', '-', trim($request->title));
        $slug = preg_replace('/\s+/u', '-', trim($request->title));
        if (!is_null($request->image)) {

            $image = $fileupload->image = UploadHelper::upload('image', $request->file('image'),  $slug . '-' . time(), 'public/images/fileupload');
        }
        // $fileupload->image_url =  base_path() . '\public\images\fileupload' . $request->file('image') . $slug . '-' . time();
        dd($fileupload);

        $postSave = $fileupload->save();
        return Redirect::to('admin/fileupload')->with($notification);
    }
}
