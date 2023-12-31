@extends('master')
@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="custom-product">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($products as $item)
            <div class="item {{$item['id'] == 1 ? 'active':''}}">
            <a href="detail/{{$item['id']}}">
            <img class="slider-img" src="{{$item['gallery']}}" alt="" >
            <div class="carousel-caption slider-text">
              <h3>{{$item['name']}}</h3>
              <p>{{$item['description']}}</p>
            </div>
            </a>
          </div>
            @endforeach
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</div>

      <div class="trending-wrapper">
      <h2 class="p-3 mb-5 bg-light text-dark font-weight-bold">Trending Products</h2>
        @foreach($products as $item)
            <div class="trending-item p-3 ">
            <a href="detail/{{$item['id']}}">
              <img class="trending-image" src="{{$item['gallery']}}" alt="" >
              <div class="trending-name">
                <h3>{{$item['name']}}</h3>
              </div>
            </a>
            </div>
        @endforeach
      </div>
</div>  
@endsection