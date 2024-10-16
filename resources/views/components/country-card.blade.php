<div>
  <div class="card tips" id="toptip"  style="width: 18rem;" data-bs-toggle="tooltip" data-bs-delay="100"  data-bs-placement="top" title="Klicken Sie für Mehr info ">
    <?php $countryName =  strtolower($country['name']['common']);?>
    <a href="{{ route('country.show' , $countryName )}}">
    <img src="{{$country['flags']['png']}}" class="card-img-top" alt="{{$country['name']['common']}}">
  </a>
    <div class="card-body">
      <h5 class="card-title">{{$country['name']['common']}}</h5>
      <p class="card-text"><strong>Population:</strong> {{$country['population']}}</p>
      <a href="{{ route('country.show' , $countryName )}}" class="btn btn-success btn-sm">Mehr Info</a>
    </div>
  </div>
</div>
