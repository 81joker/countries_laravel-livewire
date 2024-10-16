@extends('layouts.app')

@section('content')
    @foreach ($countries as $country)
        <h2 class=" content__title align-middle ">{{ $country['name']['common'] }}
            @if (isset($country['coatOfArms']['png']))
                <img class="card-img-top ms-3" src="{{ $country['coatOfArms']['png'] }}" style="max-width:50px" />
            @else
                <img class="card-img-top ms-3" src="{{ $country['flags']['png'] }}" style="max-width:50px" />
            @endif
        </h2>
        <div class="card mb-3">
            <img class="card-img-top" src="{{ $country['flags']['png'] }}" style="height:50vh" />
            <div class="card-body">
                {{-- <h5 class="card-title text-secondary">{{ $country['name']['common'] }}</h5> --}}
                <ul class="list-group list-group-horizontal-md flex-wrap">
                    <li class="list-group-item list-group-item-secondary rounded-0 fw-bold">Fläche</li>
                    <li class="list-group-item">{{ $country['area'] }} km²</li>

                    <li class="list-group-item list-group-item-secondary rounded-0 fw-bold">Region</li>
                    <li class="list-group-item">{{ $country['region'] }}</li>

                    <li class="list-group-item list-group-item-secondary rounded-0 fw-bold">Capital</li>
                    <li class="list-group-item rounded-0">{{ $country['capital'][0] }}</li>

                    <li class="list-group-item list-group-item-secondary rounded-0 fw-bold">Bevölkerung</li>
                    <li class="list-group-item">{{ $country['population'] }}</li>

                    <li class="list-group-item list-group-item-secondary rounded-0 fw-bold">Währungen</li>
                    <li class="list-group-item">
                        @foreach ($country['currencies'] as $currency)
                            {{ $currency['name'] }}
                        @endforeach
                    </li>
                    <li class="list-group-item rounded-0 fw-bold">Routenplaner</li>
                    <a href="{{ $country['maps']['googleMaps'] }}" class="btn btn-primary rounded-0"
                        data-bs-toggle="tooltip" data-bs-delay="100" data-bs-placement="top"
                        title="Klicken Sie für Routenplaner nach {{ $country['name']['common'] }} "> <i
                            class="bi bi-map"></i></a>
                </ul>
            </div>
        </div>
    @endforeach

    <!--Google map-->
    <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
        <p><a href="{{ $country['maps']['openStreetMaps'] }}" target="_blank" class="text-danger">View on OpenStreetMap</a>
        </p>
        <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0;height: 500px;width:100%" allowfullscreen></iframe> -
    </div>

    <!--Google Maps-->
@endsection
