@extends('master')
@section('content')



<div class="container">
      <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}"/>
       </div>
       <div class="col-sm-6">
       <a href="/">Go Back</a>
       <h2> {{$product['name']}} </h2>
       <h3> {{$product['price']}} </h2>
       <h3> {{$product['category']}} </h2>
       <p> {{$product['description']}} </p>
       <br><br>
       <form action="/add_to_cart" method="post">
       @csrf
       <input type="hidden" name="product_id" value="{{$product['id']}}">
       <button class="btn btn-success">Add to Cart</button>

       </form>
       <br><br>
       <button class="btn btn-danger">Buy Now</button>
       <br><br>
       <br><br>
       </div>

        
      
</div>
</div>

@endsection