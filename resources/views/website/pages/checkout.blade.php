@extends('website.webmaster')
@section('main')
<div class="bg-light">
    <div class="container">
        <div class="py-5 text-center">

        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">You crart</span>
                    <span class="badge badge-secondary badge-pill">{{ $product_count }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach ($items as $item)

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ $item->name }}</h6>Quantity :
                            {{-- <a href="{{ route('cart.decrease',[$item->rowId,$item->qty]) }}" class="btn btn-secondary btn-sm">-</a> --}}
                            <small class="text-muted">{{ $item->qty }}</small>
                            {{-- <a href="{{ route('cart.increase',[$item->rowId,$item->qty]) }}" class="btn btn-secondary btn-sm">+</a> --}}

                        </div>
                        <span class="text-muted">TK{{ $item->price }}</span>
                    </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>Taka{{ $total }}</strong>
                    </li>
                </ul>
                <a class="btn btn-primary btn-lg btn-block" href="{{ route('checkout.done') }}">Continue to checkout</a>
            </div>
            <div class="col-md-8 order-md-1">
                <h4 class="mb-3">Billing address</h4>
                <form class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="{{auth()->user()->name}}" required="" disabled>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com" value="{{ auth()->user()->email }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <textarea disabled class="form-control" name="" id="" cols="30" rows="5">{{ auth()->user()->address }}</textarea>
                    </div>

                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>



                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                            <label class="custom-control-label" for="credit">Cash On delivery</label>


                        </div>
                    </div>



                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                            <label class="custom-control-label" for="credit">Bkash</label>


                        </div>
                    </div>

                    <hr class="mb-4">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
