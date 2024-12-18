<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('backend.blog.index' , ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.blog.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    //     */


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'description' => 'required',
            'img' => 'required|image',
        ]);



        $blog_store = new Blog();

        $blog_store->title = $request->title;
        $blog_store->img = $request->img;
        $blog_store->country = $request->country;
        $blog_store->state = $request->state;
        $blog_store->city = $request->city;
        $blog_store->description = $request->description;



        if($request->hasFile('img')){
            $file = $request->file('img')->store('upload', 'public');
            $blog_store->img = $file;
        }

        $blog_store->save();
        return redirect('/admin/blog')->with('success', 'Products and their duplicates have been saved.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogedit = Blog::findorfail($id);
        return view('backend.blog.form' , ['blogedit' => $blogedit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog_store = Blog::findorfail($id);

        $blog_store->title = $request->title;
        $blog_store->img = $request->img;


        if($request->hasFile('img')){
            $file = $request->file('img')->store('upload', 'public');
            $blog_store->img = $file;
        }

        $blog_store->save();

        return redirect('/admin/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Blog::findorfail($id);
        if ($pro->img) {
            Storage::delete('public/' . $pro->img);
        }
        $pro->delete();
        return redirect('/admin/blog');
    }
}
