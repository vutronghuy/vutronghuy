<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all();
        // $totalPrice = $this->getTotalPrice($cartItems);

        return view('frontend.cart', compact('cartItems'));
    }


    public function count()
    {
        $cartItems = Session::get('products.cart', []);
        $cartItemCount = count($cartItems);
        return $cartItemCount;
    }


    public function add(Request $request)
    {
        $exist = false;

        $formFields['user_id'] = 1;
        $formFields['product_id'] = $request->product_id;
        $formFields['quantity'] = $request->quantity;

        $cartItem = CartItem::where('product_id', $request->product_id)->first();

        if ($cartItem) {
            $cartItem->quantity = $request->quantity;
            $cartItem->update($formFields);
            $exist = true;
        }

        if (!$exist) {
            CartItem::create($formFields);
        }
        return redirect()->route('cartItemss');
    }



    public function remove(CartItem $cart)
    {
        $cart->delete();
        // return redirect('/listings')->with('message', 'Game listing deleted successfully!');
        return back()->with('message', 'Game listing deleted successfully!');
    }

    public function edit($id)
    {
        $cartItem = CartItem::findOrFail($id);
        return view('products.editCart', compact('cartItem'));
    }

    public function update(Request $request)
    {
        $formFields['user_id'] = 1;
        $formFields['product_id'] = $request->product_id;
        $formFields['quantity'] = $request->quantity;

        $cartItem = CartItem::where('product_id', $request->product_id)->first();

        $cartItem->update($formFields);



        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    private function getTotalPrice($cartItems)
    {
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
        return $totalPrice;
    }
}
