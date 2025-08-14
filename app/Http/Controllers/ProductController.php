<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('brand' , 'category')->get();
        return view('backend.product.index' , ['products' => $products]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::get();
        $categories = Category::get();
        return view('backend.product.form', ['brands' => $brands , 'categories' => $categories ]);
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
            'title.*.title' => 'required',
            'price.*.price' => 'required|numeric',
            'brand_id.*.brand_id' => 'required',
            'category_id.*.category_id' => 'required',
            'img.*.img' => 'required|image',
        ]);

        $forms = $request->input('title');

        foreach ($forms as $key => $form) {
            $model = new Product();
            $model->title = $form['title'];
            $model->price = $request->input('price')[$key]['price'];
            $model->brand_id = $request->input('brand_id')[$key]['brand_id'];
            $model->category_id = $request->input('category_id')[$key]['category_id'];

            if (isset($request->file('img')[$key])) {
                $file = $request->file('img')[$key]['img'];
                if ($file->isValid()) {
                    $path = $file->store('upload', 'public');
                    $model->img = $path;
                } else {
                    return back()->withErrors(['img' => 'File not uploaded properly.']);
                }
            }
            $model->save();
        }
        return redirect('/admin/product')->with('success', 'Products and their duplicates have been saved.');
    }




    public function search(Request $request)
    {
        $query = $request->get('query');
        $products = Product::where('title', 'like', "%{$query}%")->get();
        return response()->json($products);
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
        $show = Product::findorfail($id);
        $brands = Brand::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('backend.product.form' , ['show' => $show , 'brands' => $brands , 'categories' => $categories  , '$tags' => $tags]);
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
        $store = Product::findOrFail($id);

        // Extract array values from the request
        $store->title = $request->input('title')[0]['title'];  // Accessing the first element in
        //
        //
        // the array
        $store->price = $request->input('price')[0]['price'];  // Accessing the first element in the array
        $store->brand_id = $request->input('brand_id')[0]['brand_id'];  // Accessing the first element in the array
        $store->category_id = $request->input('category_id')[0]['category_id'];

        if ($request->hasFile('img')) {
            $file = $request->file('img')[0]['img']->store('upload', 'public');  // Accessing the uploaded file
            $store->img = $file;
        }


        $store->save();

        return redirect('/admin/product');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Product::findorfail($id);
        if ($pro->img) {
            Storage::delete('public/' . $pro->img);
        }
        $pro->delete();
        return redirect('/admin/product');
    }
}
