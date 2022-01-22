<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    public function showCartPage()
    {
        $items = Cart::content();
        return view('website.pages.cart_page', compact('items'));
    }
    public function CartProducts()
    {
    }
    public function AddtoCart($id)
    {
        $item = Item::where('id', $id)->first();
        Cart::add(
            $item->id,
            $item->item_name,
            1,
            $item->price,
        );
        return redirect()->back();
    }
    public function RemoveFromCart($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back();
    }
    public function CheckoutPage()
    {
        $product_count = Cart::count();
        $items = Cart::content();
        $total = Cart::subtotal();
        return view('website.pages.checkout', compact('items', 'product_count', 'total'));
    }
    public function CheckoutDone()
    {
        
    }
}
