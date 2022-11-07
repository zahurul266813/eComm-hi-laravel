@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="">
                <div class="form-group">
                    <label for="exampleInputEmail">Email Address</label>
                    <input type="email"  class="form-control" id="exampleInputEmail">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <input type="email"  class="form-control" id="exampleInputPassword">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
