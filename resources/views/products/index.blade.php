<x-layout>
  <div id="carouselExampleControls" class="container carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach($products as $product)
      <div class="carousel-item {{$product['id']==1?'active':''}}">
        <a href="/products/{{$product->id}}">
          <img src="{{$product['gallery']}}" class="slider-img" />
          <div class="carousel-caption">
              <h3 class="text-success">{{$product['name']}}</h3>
              <p class="text-info">{{$product['description']}}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    <h3 class="text-center my-5 text-secondary">Trending Products</h3>
      <div class="row text-center">
          @foreach($randomProducts as $product)
          <div class="col-md-4 mb-4">
            <div class="card">
              <a href="/products/{{$product->id}}">
                <img
                  src="{{$product['gallery']}}"
                  class="card-img-top"
                  alt="..." width="70" height="200"
                />
                <div class="card-body">
                  <h5 class="card-title text-success">{{$product['name']}}</h5>
                </div>
             </a>
            </div>
          </div>
          @endforeach
      </div>
  </div>   
</x-layout>