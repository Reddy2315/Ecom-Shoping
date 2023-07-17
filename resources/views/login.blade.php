@extends('master')
@section('content')
<div class="container p-5 detail-wrapper">
    <div class="row justify-content-md-center">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="login" method="POST">
                <div class="mb-3">
                    @csrf
                    <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>    
    </div>
</div>
<!-- <button class="btn btn-primary">Click on me</button> -->
@endsection
