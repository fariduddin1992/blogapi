<?php


namespace App\Http\Controllers\Frontend;

use App\Helpers\StringHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{

    public function index()
    {

        $Categorypost = Category::all();
        return view('frontend/contactus', compact('Categorypost'));
    }
    public function store(Request $request)
    {

        // $validateData = $request->validate([
        //     'name'=>'required | unique:categories'
        // ]);
        $notification = array(
            'message' => 'Category created successfully!',
            'alert-type' => 'success'
        );
        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->website = $request->website;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->slug = StringHelper::createSlug($request->name, 'contact', 'name');

        $contact->save();
        return Redirect::to('frontend/contactus')->with($notification);
    }
}
