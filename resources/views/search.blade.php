@extends('master')
@section('content')
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="custom-product">
          <div class="col-sm-4">
              <a href="#">Filter</a>
          </div> 
          <div class="col-sm-4">
              <div class="trending-wrapper">
                  <h3>Results for Products</h3>
                  @foreach($products as $item)
                      <div class="searched-item">
                      <a href="detail/{{$item['id']}}">
                        <img class="trending-image" src="{{$item['gallery']}}" alt="" >
                          <div class="trending-name">
                              <h2>{{$item['name']}}</h2>
                              <h5>{{$item['description']}}</h5>
                          </div>
                      </a>
                      </div>
                    @endforeach
              </div>
          </div> 
  </div>   
@endsection
