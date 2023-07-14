<x-layout>
   <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{$product->gallery}}" alt="image" />
            </div>
            <div class="col-sm-8">
                <h3 class="text-success">{{$product->name}}</h3><br>
                <h4>Price: {{$product->price}}</h4>
                <h5>Detail: {{$product->description}}</h5>
                <h6>Category: {{$product->category}}</h6>
                <form action="/addToCart" method="POST" class="my-3">
                @csrf
                    <input type="hidden" name="product_id" value={{$product->id}} />
                    <button class="btn btn-primary me-2">Add to Cart </button>
                </form>
                <button class="btn btn-success">Buy Now</button>
                <br><br>
                <a href="/">Go Back</a>
            </div>
        </div>
   </div>
</x-layout>