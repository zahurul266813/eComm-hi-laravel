@extends('master')
@section('content')

<div class="custom-products">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2 class="text-center">Cart</h2>
            <div class="">
                @foreach($products as $item)
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-img" src="{{$item->gallery}}">
                                
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                
                                <div class="">
                                    <h3>{{$item->name}}</h3>
                                    
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                               
                                <div class="">
                                    
                                    <h4>{{$item->description}}</h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" type="submit">Remove From Cart</a>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
</div>

@endsection
