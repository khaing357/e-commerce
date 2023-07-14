<x-layout>
    <div class="container">
        <div class="col-sm-10 pb-4">
            <h3 class="text-primary pb-4">Order Items</h3> 
            @foreach($orders as $order)
            <div class="row py-2">
                <div class="col-sm-4">
                    <a href="/products/{{$order->product_id}}">
                        <img src="{{$order['gallery']}}"
                            alt="..." width="100" height="200" />
                    </a>
                </div>
                <div class="col-sm-4">
                    <h4 class="text-success">{{$order->name}}</h4>
                    <h6 class="text-info">Delivery Status : {{$order->status}} </h6>
                    <h6 class="text-secondary">Payment Status : {{$order->payment_status}}</h6>
                    <h6 class="text-danger">Payment Method : {{$order->payment_method}}</h6>
                    <h6 class="text-primary">Delivery Address : {{$order->address}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>    
</x-layout>