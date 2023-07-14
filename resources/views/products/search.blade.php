<x-layout>
    <div class="container">
        <h2 class="text-secondary text-md-center">Result for Products</h2>
            @foreach($products as $product)
               <div class="d-flex justify-content-center p-4">
                    <a href="/products/{{$product->id}}">
                        <img
                            src="{{$product['gallery']}}"
                            alt="..." width="250" height="300" 
                        />
                        <h4 class="text-success">{{$product->name}}</h4>
                        <p class="text-info">Detail:{{$product->description}}</p>
                    </a>
                </div>
            @endforeach
    </div>   
</x-layout>