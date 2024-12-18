<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $views = Testimonial::get();
        return view('backend.testimonial.index' , ['views' => $views]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.testimonial.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required|string|max:255',
            'paragraph' => 'required|string|max:500', // Adjust max length as needed
        ]);

        $first = new Testimonial();
        $first->heading = $request->heading;
        $first->paragraph = $request->paragraph;
        $first->save();
        return redirect()->route('testimonial')->with('success', 'testimonial created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Testimonial::findorfail($id);

        return view( 'backend.testimonial.form' ,['form' => $form]);
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
        $request->validate([
            'heading' => 'required|string|max:255',
            'paragraph' => 'required|string|max:500', // Adjust max length as needed
        ]);

        $first = Testimonial::findorfail($id);
        $first->heading = $request->heading;
        $first->paragraph = $request->paragraph;
        $first->save();
        return redirect()->route('testimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $first = Testimonial::findorfail($id);
        $first->delete();
        return redirect()->route('testimonial');
    }
}
