<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\category;
use Illuminate\Http\Request;
use App\Mail\TestEmail;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = blogs::all();
        return view('admin.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs = new blogs();
        // $category = category::orderBy('name','asc')->pluck('name','id')->prepend('Select A Category','');
        $category = category::all();
        return view('admin.blog.create',compact('blogs','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $input=$request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $blogImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $blogImage);
            $input['image'] = $blogImage;
        }

        $blogs = blogs::create([
            'title' => $input['title'],
            'author' => $input['author'],
            'tags' => $input['tags'],
            'description' => $input['description'],
            'image' =>$input['image'],
            'category_id' => $input['category_id'],

        ]);
        //     $mailData = [
        //         'name' => $input['title'],
        //         'dob' => $input['author'],
        //     ];
        // \Mail::to('ashwinkhadka119@gmail.com')->send(new \App\Mail\TestEmail($mailData));

        return redirect()->route('blog.index')->with('message','A new Blog has been created and posted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show($id,blogs $blogs)
    {
        $blogs = blogs::findOrFail($id);
        return view('admin.blog.show',compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit($id,blogs $blogs)
    {
        $blogs = blogs::findOrFail($id);
        $category = category::all();
        return view('admin.blog.edit',compact('blogs','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogs $blogs)
    {

        
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'tags'=>'required',
            'description'=>'required',
        ]);
        
        $input = $request->all();

        $blogs->update([
            'title' => $input['title'],
            'author' => $input['author'],
            'tags' => $input['tags'],
            'description' => $input['description'],
            'image' =>$input['image'],
            'category_id' => $input['category_id'],

        ]);
       
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = blogs::findorFail($id);
        $blog->delete();

        return redirect()->route('blog.index')->with('message','Data has been removed');
    }
}
