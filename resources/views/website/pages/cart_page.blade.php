@extends('website.webmaster')
@section('main')
<div class="bg-light py-5">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <p>Cart</p>
            </div>
            <div class="card-body">




            <form action="{{route('admin.item')}}">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Item Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <th scope="row">{{$item->name}}</th>
                                <td>{{$item->price}}</td>
                                <td>
                                    <a href="{{ route('cart.decrease',[$item->rowId,$item->qty]) }}" class="btn btn-secondary btn-sm">-</a>
                                    {{$item->qty}}
                                    <a href="{{ route('cart.increase',[$item->rowId,$item->qty]) }}" class="btn btn-secondary btn-sm">+</a>
                                    
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="{{route('cart.remove',$item->rowId)}}">Remove from Cart</a>
                                </td>
                            </tr>


                            @endforeach
                        </tbody>
                    </table>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-success float-right" href="{{ route('checkout') }}">Checkout</a>
            </div>
        </div>
    </div>
</div>

@endsection
