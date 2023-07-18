<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user'))
  {
    $total= ProductController::cartItem();
  }
  ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand text-primary font-weight-bold text-uppercase" href="/"><b><big>Ecom-Shop</big></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-decoration-none" aria-current="page" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-decoration-none" aria-current="page" href="/">Products</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active text-decoration-none" aria-current="page" href="">Orders</a>
          </li>
        </ul>

        <ul class="navbar-nav">
          <form action="/search" class="d-flex p-3" role="search">
          <input class="form-control me-3 search-box" type="search" name="query" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
          </form>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item">
            <a class="nav-link active text-decoration-none" aria-current="page" href="/cartlist">Cart({{$total}})</a>
          </li>

          @if(Session :: has('user'))

            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="">{{Session::get('user')['name']}}
              </a>
              <ul class="dropdown-menu">
                <li><a href="/logout">Logout</a></li>
              </ul>
          </li>
            @else
            <li class="nav-item">
            <a class="nav-link active text-decoration-none" aria-current="page" href="/login">login</a>
            </li>
            @endif
        </ul>
    </div>
  </div>
</nav> 