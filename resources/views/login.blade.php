@extends('master')
@section('content')
<div class="d-flex justify-content-center mb-3" id="login">
    <img src="{{ asset('images/login.svg') }}" class="img-fluid" height="100px" width="100px" alt="login">
</div>

<div class="form">
    <div class="mb-3 row  d-flex justify-content-center">
        <label for="staticEmail" class="col-sm-1 col-form-label">Email</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="staticEmail" placeholder="your_email@domain.com">
        </div>
    </div>
    <div class="mb-3 row  d-flex justify-content-center">
        <label for="inputPassword" class="col-sm-1 col-form-label">Password</label>
        <div class="col-sm-4">
            <input type="password" class="form-control" id="inputPassword" placeholder="********">
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-dark">Submit</button>
    </div>
</div>
@endsection()