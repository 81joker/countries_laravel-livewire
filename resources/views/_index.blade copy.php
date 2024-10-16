@extends('layouts.app')
@section('content')
{{-- Nur die Länder österreich,Ungarn,Bosnia_Herzegovina --}}
<h2 class="content__title" >Countries</h2>
  <div class="row row-cols-1 row-cols-md-4 g-3 ">
    @foreach ($österreich as $country)
    <x-country-card :country='$country' />
    @endforeach
    @foreach ($Ungarn as $country)
    <x-country-card :country='$country' />
    @endforeach
    @foreach ($Kroatien as $country)
    <x-country-card :country='$country' />
    @endforeach
    @foreach ($Bosnia_Herzegovina as $country)
    <x-country-card :country='$country' />
    @endforeach

  </div>


  <h2 class="content__title mt-5" >New Countries</h2>
    {{-- Fetch new Countries --}}
    <div class="row row-cols-1 row-cols-md-4 g-3 mt-1">
    @foreach ($newContries as $country)
    <x-newCountry-card   :country='$country' />
    @endforeach
  </div>
      {{-- Add new country --}}
      @include('layouts.model')




{{-- Show all Countries --}}
<div class="table-responsive">
  <table class="table table-hover table-bordered text-center align-middle">
  <h2 class="content__title pt-5">All Country</h2>
  <thead>
    <tr class="table-secondary">
      <th scope="col">Country</th>
      <th scope="col">Capital City</th>
      <th scope="col">Population</th>
      <th scope="col">Languages</th>
      <th scope="col">Region</th>
      <th scope="col">Flag</th>
      <th scope="col">Details Land</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($countries as $country)
    <tr>
      <td>{{$country['name']['common']}}</td>
      <td>
        {{ $country['capital'][0]?? null }}
      </td>
      <td>{{$country['population']}}</td>
      <td>
        @isset($country['languages'])
        @foreach ($country['languages'] as $item)
        {{$item}}
        @endforeach
        @endisset
      </td>
      <td>{{$country['region']}}</td>
      <td><img class="rounded img-fluid w-25 shadow-4-strong" alt=">{{$country['name']['common']}}"
          src="{{$country['flags']['png']}}" />
      </td>
      <td>
        <?php $countryName =  strtolower($country['name']['common']);?>
        <a href="{{ route('country.show' , $countryName )}}" class="btn btn-success btn-xs" data-bs-toggle="tooltip" data-bs-delay="100" class="btn btn-info"  data-bs-placement="top" title="Klicken Sie für Mehr info ">
          Show
        </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
{{ $countries->links() }}
@endsection