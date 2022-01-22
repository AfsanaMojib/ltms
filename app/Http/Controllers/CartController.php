<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{
    public function showCartPage()
    {

        return view('website.pages.cart_page');
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
}
