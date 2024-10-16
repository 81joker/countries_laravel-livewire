<div>
  <div class="card tips" id="toptip"  style="width: 18rem;" data-bs-toggle="tooltip" data-bs-delay="100"  data-bs-placement="top" title="Klicken Sie für Mehr info">
    <a href="{{ route('showcountry.show' ,  $country->id)}}">
      @if ($country->flag != '')
      <img src="{{ asset('assets/imag/' . $country->flag) }}" class="card-img-top" alt="{{ $country->country }}">
      @else
      <img src="{{ asset('assets/imag/all_country.jpeg') }}" class="card-img-top" alt="{{ $country->country }}">
      @endif
  </a>
    <div class="card-body">
      <h5 class="card-title">{{ $country->country }}</h5>
      <p class="card-text"><strong>Population:</strong> {{ $country->population }}</p>
      <a href="{{ route('showcountry.show' ,  $country->id)}}" class="btn btn-success btn-sm">Mehr Info</a>

    </div>
  </div>
</div>
