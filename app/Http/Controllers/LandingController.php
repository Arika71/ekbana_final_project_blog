<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;
use App\Models\category;
use App\Models\comments;

class LandingController extends Controller
{
    public function index(){

        $blog = blogs::orderBy('title','asc')->paginate(1);
        $blog2 = blogs::orderBy('created_at','desc')->paginate(1);
        $blog3 = blogs::orderBy('author','asc')->paginate(1);
        $blog4 = blogs::orderBy('author','desc')->paginate(1);
        $blog5 = blogs::orderBy('created_at','desc')->paginate(1);
        $sideBlog = blogs::orderBy('title','desc')->paginate(4);
        $lastBlog = blogs::orderBy('title','desc')->paginate(6);
        $category1 = category::inRandomOrder()->paginate(1);
        return view('welcome',compact('blog','blog2','blog3','blog4','blog5','sideBlog','lastBlog','category1'));
    }

    public function show($id){
        $popularBlogs = blogs::orderBy('created_at','asc')->paginate(4);
        $mainBlog = blogs::findOrFail($id);
        $category = category::all();
        $comment = comments::all()->where('blog_id','=', $id);
        $sideBlog = blogs::orderBy('title','desc')->paginate(4);
        return view('singlePageBlog',compact('sideBlog','mainBlog','category','popularBlogs'))->with('comment',$comment);
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function blog(){
        $sideBlog = blogs::orderBy('title','desc')->paginate(4);
        $blogPosts = blogs::orderBy('created_at','asc')->paginate(10);
        $category = category::all();
        return view('blog',compact('blogPosts','sideBlog','category'));
    }
}
