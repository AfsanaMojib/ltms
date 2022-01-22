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
                                <th scope="col">Item Type</th>
                                <th scope="col">Item Category</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($items as $item)
                            <tr>
                                <th scope="row">{{$item->item_name}}</th>
                            <td>{{$item->ItemType->item_name}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->description}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->status}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route('admin.item.delete',$item->id)}}">Delete</a>
                            </td>
                            </tr>
                            @endforeach
                            --}}
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection