<?php

namespace App\Http\Controllers;

use App\Models\Blog ;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\OrderItem;


class FrontendController extends Controller
{

    public function home()
    {
        $blogs1 = Blog::take(3)->get();
        $products = Product::take(4)->get();
        $items = Testimonial::all();

        return view('index-html', [
            'items' => $items,
            'blogs1' => $blogs1,
            'product1' => $products[0] ?? null,
            'product2' => $products[1] ?? null,
            'product3' => $products[2] ?? null,
            'product4' => $products[3] ?? null,
        ]);
    }


    public function destroy($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back();
    }

    public function ThankYou(){
        return view('thankyou');
    }


    public function updateCart(Request $request, $id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false]);
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);

        return view('cart', ['cart' => $cart]);
    }

    public function addToCart(Request $request)
    {

        $product = Product::findOrFail($request->product_id);
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $request->quantity;
        } else {
            $cart[$product->id] = [
                "name" => $product->title,
                "price" => $product->price,
                "quantity" => $request->quantity,
                "img" => $product->img,
            ];
        }

        session()->put('cart', $cart);

        return response()->json(['message' => 'Product added to cart successfully!']); // Return JSON response
    }


    public function checkout(Request $request)
    {
        $cartItems = session()->get('cart', []);


        if(empty($cartItems)) {
            return redirect()->back()->with('error', 'Your cart is empty.');
        }

        DB::transaction(function () use($request, $cartItems) {
            $order = Order::create([
                'name' => $request->name,
                'email' => $request->email,
                'city' => $request->city,
                'country' => $request->country,
                'address' => $request->address,
            ]);

            foreach ($cartItems as $id => $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $id,
                    'qty' => $item['quantity'],
                ]);
            }
        });

        session()->forget('cart');

        return redirect()->route('cart.thank-you')->with('success', 'Checkout successfully completed.');
    }




    public function about()
    {
        return view('about');
    }



    public function blog()
    {
        $blogs  = Blog::get();
        return view('blogs' , ['blogs' => $blogs]);
    }


    public function products(Request $request)
    {
        $tags = Tag::get();

        $minPrice = $request->input('minPrice', 0);
        $maxPrice = $request->input('maxPrice', 1000);

        $products = Product::whereBetween('price', [$minPrice, $maxPrice])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('products', compact('products', 'tags'));
    }



    public function details($id)
    {
        $product  = Product::find($id);
        return view('product_detail'  , ['product' => $product]);
    }

    public function blog_detail()
    {
        return view('blog_detail');
    }

    public function error_page()
    {
        return view('error_page');
    }
    public function login_page()
    {
        return view('login_page');
    }
    public function admin()
    {
        return view('backend.admin');
    }



    public function showByCategory(Request $request, $categoryId)
    {
        $products = \App\Models\Frontend\Product::where('category_id', $categoryId)->get();
        $categories = Category::get();
        $brands = Brand::get();
        $selectedCategory = Category::find($categoryId);

        return view('producted.product', compact('products', 'categories', 'brands', 'selectedCategory'));
    }


    public function showByBrand($brandId)
    {
        $products = Product::where('brand_id', $brandId)->get();
        $categories = Category::all();
        $brands = Brand::all();

        return view('producted.product', compact('products', 'categories', 'brands'));
    }

}
