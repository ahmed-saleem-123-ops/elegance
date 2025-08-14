<?php
namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Stripe;
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
//    public function stripe(Request $data)
//    {
//        $bill = $data->input('bill');
//        $name = $data->input('name');
//        $email = $data->input('email');
//        $city = $data->input('city');
//        $country = $data->input('country');
//        $address = $data->input('address');
//        return view('stripe', compact('bill', 'name', 'email', 'city', 'country', 'address'));
//    }

    public function stripe(Request $data)
    {
        $bill = $data->input('bill');
        $name = $data->input('name');
        $email = $data->input('email');
        $city = $data->input('city');
        $country = $data->input('country');
        $address = $data->input('address');


        $details = [
            'price' => $data->input('price', 0),
            'quantity' => $data->input('quantity', 1),
        ];

        return view('stripe', compact('bill', 'name', 'email', 'city', 'country', 'address', 'details'));
    }



    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
//    public function stripePost(Request $request)
//    {
//
//        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
//
//        Stripe\Charge::create ([
//            "amount" => 100 * 100,
//            "currency" => "usd",
//            "source" => $request->stripeToken,
//            "description" => "Test payment from itsolutionstuff.com."
//        ]);
//
//        Session::flash('success', 'Payment successful!');
//
//        return back();
//    }
    public function stripePost(Request $request)
    {
        if (!$request->has('stripeToken')) {
            Session::flash('error', 'Token missing!');
            return back();
        }
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $request->input('bill') * 100,
            "currency" => "pkr",
            "source" => $request->stripeToken,
            "description" => "New Order Payment Recieved Successfully"
        ]);

        Session::flash('success', 'Payment successful!');

        {
            $cartItems = session()->get('cart', []);


            if(empty($cartItems)) {
                return redirect()->back()->with('error', 'Your cart is empty.');
            }

            DB::transaction(function () use($request, $cartItems) {
                $order = Order::create([
                    'status' => "paid",
                    'name' => $request->name,
                    'email' => $request->email,
                    'city' => $request->city,
                    'country' => $request->country,
                    'address' => $request->address,
                    'bill' => $request->bill
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


        return redirect()->route('stripe')->with(compact('bill', 'name', 'email', 'city', 'country', 'address'));
    }

}
