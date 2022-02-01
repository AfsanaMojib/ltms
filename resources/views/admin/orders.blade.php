@extends('admin.master')
@section('main')
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Details</th>
            <th scope="col">User</th>
            <th scope="col">Delivery Address</th>
            <th scope="col">Order Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>TK{{$order->amount}} for {{ $order->OrderProducts->count() }} Items</td>
            <td>{{ $order->user->name }}</td>
            <td>{{ $order->user->address }}</td>
            <td>{{ $order->order_date }}</td>
            <td><a class="btn btn-info" href="#">View</a>
                <a class="btn btn-info" href="#">Edit</a>
                <form action="{{ route('orders.destroy',$order) }}" onsubmit="return confirm('Are you sure to delete this Category ?');" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">
                        Delete
                    </button>
                </form>

            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection