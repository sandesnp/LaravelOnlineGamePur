@extends('layouts.app')


@section('content')
<div class="row justify-content-center">
<div class="col-6">
<div class="card mb-3">
        <h3 class="card-header" >Checkout</h3>
        <div class="card-body">
          <h5 class="card-title">{{$products->product_name}}</h5>
        </div>
        <img style="width:450px;height:400px; margin:0 auto; display: block;" src="/assignment/public/storage/Product_images/{{$products->product_image}}" alt="Card image">
        
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Game Price: {{$products->product_price}}</li>
          <li class="list-group-item">Your Wallet Sum: {{Session::get('walletamt' )}}</li>
          <li class="list-group-item">Reamining Sum: <?php $remaining= Session::get('walletamt' )-$products->product_price ?> {{$remaining}}</li>
        </ul>
        <div class="card-body">
                {!! Form::open(['action'=>['purchasecontroller@store'], 'method'=>'POST']) !!}
                <input type="hidden" name="id" value="{{$products->id}}">
                <input type="hidden" name="product_price" value="{{$products->product_price}}">  
                 <button type="submit" class="btn btn-outline-info" style="float:left;">CHECKOUT </button>
                {!!form::close()!!}
        <a href="/assignment/public/product/{{$products->id}}" class="btn btn-outline-info" style="float:right;">Go Back</a>
        </div>
      </div>
    </div>
</div>
@endsection