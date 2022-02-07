<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

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
    public function CheckoutDone(Request $request)
    {

        DB::transaction(function () {
            $items = Cart::content();
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'amount' => Cart::subtotal(),
            ]);
            foreach ($items as $item) {

                OrderProduct::create([
                    'order_id' => $order->id,
                    'item_id' => $item->id,
                    'quantity' => $item->qty,
                    'unit_price' => $item->price,
                ]);
            }
            
        });
        Cart::destroy();
        return redirect()->route('userprofile');
    }
    public function increase($rowId,$qty)
    {
        // dd($rowId);

        Cart::update($rowId, $qty + 1);
        return redirect()->back();

    }
    public function decrease($rowId,$qty)
    {
        Cart::update($rowId, $qty - 1);
        return redirect()->back();
    }
}
