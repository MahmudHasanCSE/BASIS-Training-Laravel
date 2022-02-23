<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //

    protected $blog;

    public function index()
    {
        return view('add-blog');
    }

    public function create(Request $request)
    {
//        return $request->all();
        $this->blog = new Blog();
        $this->blog->title       = $request->title;
        $this->blog->author      = $request->author;
        $this->blog->description = $request->description;
        $this->blog->save();

//        return "success"; one time session 'message' which will destroy afterwards
        return redirect()->back()->with('message', 'Blog information saved successfully!');
    }
}
