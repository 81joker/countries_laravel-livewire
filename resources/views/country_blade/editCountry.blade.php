@extends('layouts.app')

@section('content')
<form action="{{ route('showcountry.update', $country->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
        <div class="row">
            <div class="col col-6">
                <div class="mb-3">
                    <label for="country" class="form-label"> Country</label>
                    <input type="text" class="form-control" id="country" name="country"  value="{{ old('country', $country->country) }}" >
                    @error('country')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="mb-3">
                      <label for="capital_city" class="form-label">Capital City</label>
                      <input type="text" class="form-control" id="capital_city" name="capital_city"  value="{{ old('capital_city', $country->capital_city) }}" >
                      @error('capital_city')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                      </div>
         
                    <div class="mb-3">
                      <label for="population" class="form-label">Bevölkerung</label>
                      <input type="number" class="form-control" id="population" name="population"  value="{{ old('population',$country->population) }}" >
                      @error('population')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                      </div>
         
                    <div class="mb-3">
                      <label for="region" class="form-label">Region</label>
                      <input type="text" class="form-control" id="region" name="region"  value="{{ old('region',$country->region) }}" >
                      @error('region')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                      </div>          
            </div>
            <div class="col col-6">
                <div class="mb-3">
                    <label for="area" class="form-label">Fläche</label>
                    <input type="text" class="form-control" id="area" name="area"  value="{{ old('area',$country->area) }}" >
                    @error('area')
                    <span class="text-danger">{{ $message }}</span>
                   @enderror
                  </div>
                  <div class="mb-3">
                      <label for="flag" class="form-label">Flage</label>
                      <input type="file" class="form-control" id="flag" name="flag"  value="{{ old('flag',$country->flag) }}" >
                      @error('flag')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                      </div>                          
            </div>
        </div>
        <div class="mt-3">
            <input type="submit" name="save" value="Update Country" class="btn btn-success">
        </div>
</div>
</form>
@endsection