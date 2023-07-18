@extends('master')
@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div>
<div class="cartlist-page">
        <!-- <div class="col-sm-4 mb-4">
            <a href="#">Filter</a>
        </div>  -->
    
    <div class="col-sm-10">
        <div class="row cartlist-item">
             <h3 style=" text-align:left">Results for Products</h3>
             @foreach($products as $item)
                <div class="cartlist-wrapper cart-list-divider">
                    <div class="col-sm-3 mb-5">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}" alt="">
                        </a>
                    </div>  
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <div class="trending-name">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
                    </div>
                </div>
                
              @endforeach
        </div>
    </div> 
  </div>   
@endsection
