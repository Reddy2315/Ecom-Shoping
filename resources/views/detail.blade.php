@extends('master')
@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container m-5">
    <div class="row detail-wrapper">
        <div class="col-sm-6">
        <img class="detail-img" src="{{$product['gallery']}}"/>
        </div>
        <div class="col-sm-6">
        <a class="btn btn-secondary mb-2 " href="/">Go Back</a>
        <h2>{{$product['name']}}</h2>
        <h3>Price : {{$product['price']}}</h3>
        <h5>Description : {{$product['description']}}</h5>
        <h5>Category : {{$product['category']}}</h5>

        <div class="mb-2">
            <form action="/add_to_cart" method="POST">
              @csrf
              <input type="hidden" name="product_id" value={{$product['id']}}>
             <button class="btn btn-primary m-2">Add to Cart</button>
             <button class="btn btn-success m-2">Buy Now</button>
            </form>
            
        </div>
        </div>
    </div>
  </div>  
@endsection