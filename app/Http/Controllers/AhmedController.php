<?php

namespace App\Http\Controllers;

use App\Models\Ahmed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AhmedController extends Controller
{

    public function index()
    {
        $chupapi = Ahmed::get();
        return view('backend.ahmed.index' , ['chupapi' => $chupapi]);
    }


    public function create()
    {
        return view('backend.ahmed.form');
    }


    public function store(Request $request)
    {

        $practice = new Ahmed();

         $practice->title = $request->title;
        $practice->country = $request->country;
        $practice->state = $request->state;
        $practice->img = $request->img;
        $practice->city = $request->city;
        $practice->description = $request->description;

        if ($request->hasFile('img')){
            $top =  $request->file('img')->store('upload' , 'public');
            $practice->img = $top;
        }

        $practice->save();

        return redirect('/admin/ahmed')->with('success', 'Products and their duplicates have been saved.');
    }



    public function edit($id)
    {
        $udas = Ahmed::findorfail($id);
        return view('backend.ahmed.form', ['udas' => $udas]);
    }




    public function update(Request $request, $id)
    {

        $practice = Ahmed::findorfail($id);


        $practice->title = $request->title;
        $practice->country = $request->country;
        $practice->state = $request->state;
        $practice->img = $request->img;
        $practice->city = $request->city;
        $practice->description = $request->description;

        if ($request->hasFile('img')){
            $top =  $request->file('img')->store('upload' , 'public');
            $practice->img = $top;
        }

        if ($request->hasFile('img')){
            $top = $request->file('img')->store('upload','public');
            $practice->img = $top;
        }

        $practice->save();

        return redirect()->route('ahmed');
    }




    public function destroy($id)
    {
        $popat = Ahmed::findorfail($id);
        if ($popat->img){
            storage::delete('public/' . $popat->img);
        }

        $popat->delete();
        return redirect('/admin/ahmed');
    }
}
