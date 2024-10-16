<!-- Button trigger modal -->
<button type="button" class="btn btn-success my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Newe Country
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Add Newe Country</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <form action="{{ route('showcountry.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col col-6">
                        <div class="mb-3">
                            <label for="country" class="form-label"> Country</label>
                            <input type="text" class="form-control" id="country" name="country"  value="{{ old('country') }}" aria-describedby="emailHelp">
                            @error('country')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                          </div>
                          <div class="mb-3">
                              <label for="capital_city" class="form-label">Capital City</label>
                              <input type="text" class="form-control" id="capital_city" name="capital_city"  value="{{ old('capital_city') }}" aria-describedby="emailHelp">
                              @error('capital_city')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                              </div>
                 
                            <div class="mb-3">
                              <label for="population" class="form-label">Bevölkerung</label>
                              <input type="number" class="form-control" id="population" name="population"  value="{{ old('population') }}" aria-describedby="emailHelp">
                              @error('population')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                              </div>
                 
                            <div class="mb-3">
                              <label for="region" class="form-label">Region</label>
                              <input type="text" class="form-control" id="region" name="region"  value="{{ old('region') }}" aria-describedby="emailHelp">
                              @error('region')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                              </div>          
                    </div>
                    <div class="col col-6">
                        <div class="mb-3">
                            <label for="area" class="form-label">Fläche</label>
                            <input type="text" class="form-control" id="area" name="area"  value="{{ old('area') }}" aria-describedby="emailHelp">
                            @error('area')
                            <span class="text-danger">{{ $message }}</span>
                           @enderror
                          </div>
                          <div class="mb-3">
                              <label for="flag" class="form-label">Flage</label>
                              <input type="file" class="form-control" id="flag" name="flag"  value="{{ old('flag') }}" aria-describedby="emailHelp">
                              @error('flag')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                              </div>                          
                    </div>
                </div>
                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>