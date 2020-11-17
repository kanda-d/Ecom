@extends('master')
@section('content')



<div class="custom-product" >


<div class="trending-wrapper">
<h1>Searched Results "{{$query}}"</h1>

<div class="carousel-inner">
    @foreach ($search as $item)
    <div class="trending-item">
    <br><br>
    <a href="detail/{{$item['id']}}"> 
     <img class="trending-img" src="{{$item['gallery']}}" alt="Chania">
      <div class="">
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