@extends('website.webmaster')
@section('main')

<div class="bg-light">
    <div class="container rounded bg-white">
        <div class="row">
            <div class="col-sm">
                <div class="col-md-3">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">
                            <h5 class="user-name">{{auth()->user()->name}}</h5>
                            <h6 class="user-email">{{auth()->user()->email}}</h6>
                        </span>
                        <span class="text-black-50"></span><span> </span>
                    </div>
                </div>
                <form action="{{route('website.user.update.profile',auth()->user()->id)}}" method='post'>
                    @method('PUT')
                    @csrf
                    <div class="border-right">
                        <div class="p-3 py-5">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Profile Settings</h4>
                            </div>
                            <!-- <div class="row mt-2"> -->
                            <!-- <div class="col-md-6"><label class="labels">Your Name</label><input type="text" class="form-control" placeholder=" name" value=""></div> -->
                            <!-- <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div> -->
                            <!-- </div> -->
                            <div class="row mt-3">
                                <div class="col-md-12"><label class="labels">Name</label><input type="name" class="form-control" placeholder="name" value=""></div>
                                <div class="col-md-12"><label class="labels">Your Email</label><input type="email" class="form-control" placeholder="email" value=""></div>
                                <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="phone number" value=""></div>
                                <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="address" value=""></div>
                                <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="password" value=""></div>
                                <div class="col-md-12"><label class="labels">Confirm Password</label><input type="text" class="form-control" placeholder="confirm password" value=""></div>
                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Update Profile</button></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm">
                <div class="mt-5">
                    <div class="card mt-5">
                        <div class="card-header">
                            <p>Orders</p>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.item')}}">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Order Details</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr>
                                            <th scope="row">#{{$order->id}}</th>
                                            <td>${{$order->amount}} for {{ $order->order_products_count }} Items</td>
                                            <td>
                                                <a class="btn btn-success" href="{{route('cart.remove',$order->id)}}">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection