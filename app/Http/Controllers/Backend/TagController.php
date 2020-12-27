<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\StringHelper;
use Session;
use App\Models\Tag;

class TagController extends Controller
{
   



    public function index()
    {
        $tag = Tag::all();
        return view('backend.tag.index', compact('tag'));
    }


    public function create()
    {
        return view('backend.tag.create');
    }

    public function store(Request $request)
    {
        $tag = new Tag();

        $this->validate($request, [
            'name' => 'required',
        ]);

        $tag->name = $request->name;
        $tag->slug = StringHelper::createSlug($request->name, 'tag', 'name');
        $tag->save();

        return redirect('admin/tag/add')->with('message', 'Tag information added successfully  !!!');
    }
    public function edit($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        return view('backend.tag.edit', compact('tag'));
    }
    public function update(Request $request, $slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $this->validate($request, [
            'name' => 'required',
        ]);
        $tag->name = $request->name;
        $tag->save();
        session()->flash('success', 'Tag information updated successfully !!!');
        return redirect()->route('admin.tag.index');
    }
}
