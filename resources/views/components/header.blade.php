<?php
use App\Http\Controllers\ProductController;

$total=0;
if(auth()->user())
  {
    $total=ProductController::cartItem();
 }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">E-commerce</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
        @auth
          <a class="nav-link" href="/myOrders">Orders</a>
        @else
          <a class="nav-link" href="/login">Orders</a>
        @endauth
        </li>
      </ul>
      <form class="d-flex" action="/search">
          <input class="form-control search-box me-2" name="search" type="text" placeholder="Search" aria-label="Search">
          <button class="input-group-text btn btn-outline-success" type="submit">Search</button>
      </form>
      <div class="d-flex ms-auto"> 
        <ul class="nav navbar-nav">
        @auth
          <li class="me-4"><a href="/cartList">Cart({{$total}})</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-bs-toggle="dropdown">{{auth()->user()->name}}</a>
            <ul class="dropdown-menu">
              <li>
                <form action="/logout" method="POST">
                @csrf
                  <button class="btn btn-link" type="submit">Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li class="me-3"><a href="/register">Register</a></li>
          <li><a href="/login">Login</a></li>
        @endauth
        </ul>
      </div> 
    </div>
  </div>
</nav>