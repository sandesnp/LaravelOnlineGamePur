@extends('layouts.app')
@section('content')
<h1 style="text-align: center; color:white;">Wallet Update</h1>

<div class="row">
	<aside class="col-lg-6 offset-lg-3">


<article class="card">
<div class="card-body p-5">
<p> <img src="http://bootstrap-ecommerce.com/main/images/icons/pay-visa.png"> 
	<img src="http://bootstrap-ecommerce.com/main/images/icons/pay-mastercard.png"> 
   <img src="http://bootstrap-ecommerce.com/main/images/icons/pay-american-ex.png">
</p>

{!! Form::open(['action'=>['walletcontroller@update','{{auth::user()->id}}'],'method'=>'POST']) !!}


<div class="form-group">
<label for="full_name">Full name (on the card)</label>
<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text"><i class="fa fa-user"></i></span>
	</div>
	<input type="text" class="form-control" name="full_name" placeholder="Full name here..." >
</div> <!-- input-group.// -->
</div> <!-- form-group.// -->



<div class="form-group">
<label for="cardnumber">Card number</label>
<div class="input-group">
	<div class="input-group-prepend">
		<span class="input-group-text"><i class="fa fa-credit-card"></i></span>
	</div>
	<input type="text" class="form-control" name="cardnumber" placeholder="Card Number...">
</div> <!-- input-group.// -->
</div> <!-- form-group.// -->


<hr>
<div> <label><span class="hidden-xs">Expiration</span> </label></div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group" >
                <select class="form-control" name="month">
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                      </select>
                  
        </div>
    </div>


    <div class="col-sm-4">
            <div class="form-group">
                
                <select class="form-control" name="year">        
                        <option>2019</option>
                        <option>2020</option>
                        <option>2021</option>
                        <option>2022</option>
                      </select>
            </div> <!-- form-group.// -->
        </div>
    
    <div class="col-sm-4">
        <div class="form-group">
            
            <input class="form-control" type="number" placeholder="Day here..." name="day">
        </div> <!-- form-group.// -->
    </div>
</div> <!-- row.// -->
<hr>
<div class="form-group">
        <label for="username">Update Wallet</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
            </div>
            <input type="number" class="form-control" name="wallet_amount" placeholder="Amount here...">
        </div> <!-- input-group.// -->
</div> <!-- form-group.// -->


<button class="subscribe btn btn-primary btn-block"> Confirm  </button>
{!! form::hidden('_method','PUT') !!}
{!! Form::close() !!}
</div> <!-- card-body.// -->
</article> <!-- card.// -->
</div>
@endsection