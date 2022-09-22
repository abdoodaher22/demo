<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class blogsController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('blogs.index',['blogs' => $blogs]);
    }
    public function update(Blog $blog){
        return view('blogs.update',['blog' => $blog]);

    }
    public function store(){
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        Blog::create([
            'title' => request('title'),
            'content' => request('content'),
        ]);
        return redirect('/blogs');
    }
    public function change(Blog $blog){
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $blog->update(
            [
                'title' => request('title'),
                'content' => request('contant')
            ]
            );
    }
    public function create(){
        return view('blogs.create');
    }
    public function destory(Blogs $blog){
        $blog->delete();
        return redirect('/blogs');
    }
}
