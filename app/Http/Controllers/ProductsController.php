<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        // $products = response()->json($products);
        // echo '<pre>';
        // print_r($products[0]->name); exit;
        return view('products', ['products' => $products]); 
    }
    public function show($id) {
        $product = Products::find($id);
        return view('product', ['product' => $product]);
    }    

    public function confirmPurchase(Request $request)
    {

        $product = Products::find($request->pid);

        // Set Stripe API key
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $token = $request->stripeToken;

        // Create a charge
        $charge = Charge::create([
            'amount' => $product->price, // Amount in cents
            'currency' => 'inr',
            'source' => $token,
            'description' => 'Purchase of ' . $product->name,
        ]);

        // Handle successful charge
        if ($charge->status === 'succeeded') {

            return redirect()->route('thankyou');
        }
        
    }

    public function thankyou() {        
        return view('status');
    }
}
