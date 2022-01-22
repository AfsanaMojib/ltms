<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartCount extends Component
{
    public $count_value = 0;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->count_value = Cart::count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cart-count');
    }
}
