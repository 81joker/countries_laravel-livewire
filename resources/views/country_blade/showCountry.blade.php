@extends('layouts.app')

@section('content')
<h2 class=" content__title align-middle ">{{ $country->country }}</h2>  
<div class="card mb-3">
    @if ($country->flag != '')
    <img src="{{ asset('assets/imag/' . $country->flag) }}"class="card-img-top ms-3" alt="{{ $country->country }}">
    @else
    <img src="{{ asset('assets/imag/all_country.jpeg') }}"class="card-img-top ms-3" alt="{{ $country->country }}">
    @endif
  <div class="card-body">
    <h5 class="card-title">{{ $country->country }} </h5>
    <ul class="list-group list-group-horizontal ">
      <li class="list-group-item list-group-item-secondary rounded-0">Fläche</li>
      <li class="list-group-item">{{ $country->area }}km²</li>
      <li class="list-group-item list-group-item-secondary rounded-0">Region</li>
      <li class="list-group-item">{{$country['region']}}</li>
      <li class="list-group-item list-group-item-secondary">Capital</li>
      <li class="list-group-item rounded-0">{{ $country->capital_city }}</li>
      <li class="list-group-item list-group-item-secondary rounded-0">Bevölkerung</li>
      <li class="list-group-item">{{$country->population}}</li>
      <li class="list-group-item list-group-item-secondary rounded-0">Währungen</li>
      <li class="list-group-item">
        currency

      </li>
      <li class="list-group-item list-group-item-secondary">Capital</li>
      <li class="list-group-item rounded-0">{{ $country->capital_city }}</li>

     <div class="ms-auto">
        <a href="{{ route('showcountry.edit', $country->id) }}" class="btn btn-info ">Edit</a>
        <a href="javascript:void(0)" class="btn btn-danger "
        onclick="if(confirm('Are you sure ?')){document.getElementById('delete-{{ $country->id }}').submit();} else {return false}">Delete</a>
    <form action="{{ route('showcountry.destroy', $country->id) }}" method="post"
        id="delete-{{ $country->id }}" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
     </div>
    </ul>
  </div>
</div> 


<!--Google map-->
<div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
    <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
      style="border:0;height: 500px;width:100%" allowfullscreen></iframe>
  </div>
  
  <!--Google Maps-->

@endsection
