<x-layout>
    <div class="container mb-3">
        <div class="col-sm-10 pb-4">
            <h3 class="text-primary pb-4">Cart Items</h3> 
            @foreach($products as $product)
            <div class="row py-2">
                <div class="col-sm-4">
                    <a href="/products/{{$product->product_id}}">
                        <img src="{{$product['gallery']}}"
                            alt="..." width="100" height="200" />
                    </a>
                </div>
                <div class="col-sm-4">
                    <h4 class="text-success">{{$product->name}}</h4>
                    <p class="text-info">Detail:{{$product->description}}</p>
                </div>
                <div class="col-sm-4">
                    <a href="/removeCart/{{$product->cart_id}}"><button class="btn btn-warning"> Remove from Cart</button></a>
                </div>
            </div>
            @endforeach
        </div>
        <a href="/orderNow" class="btn btn-success"> Order Now</a> 
    </div>    
</x-layout>