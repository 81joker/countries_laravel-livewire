<div class="position-relative" x-data="{ isOpen: true}" @click.away="isOpen = false">
    <form class="d-flex">
        <input wire:model.debounce.500ms="search" class="form-control me-2" type="text" placeholder="Search...."
            aria-label="Search" 
            @click="isOpen = true"
            @keydown.escape.window = "isOpen = false"
            style="padding-left: 3rem;padding-right:3rem"
            >
        <button class="btn btn-light" type="submit"><i class="bi bi-search"></i></button>
    </form>
   
@if (strlen($search) > 2)
<div class="mt-4" x-show="isOpen"
@keydown.escape.window = "isOpen = false">
<div wire:loading class="spinner-border position-absolute top-0 end-50" role="status">
    <span class="visually-hidden">Loading...</span>
  </div>
       <ul class="list-group position-absolute top-50" style="z-index: 33333">
        @foreach ($searchResults as $country)
        @if (isset($country['name']['common']))
            <li class="border border-1 list-group-item search">
                <?php
                $countryName =  strtolower($country['name']['common']);
                $countryName = str_replace(' ', '_', $countryName);
                ?>
                <a href="{{ route('country.show' , $countryName )}}" class="block d-flex item-center " href="#" >
                    <img src="{{ $country['flags']['png']}}" class="card-img-top w-25" alt="...">
                    <span class="ms-3">{{$country['name']['common'] }}</span>
                </a>
                </li>
                @else
                <div class="alert alert-success">No Result for {{ $search}} </div>     
                @break
                @endif
            @endforeach 
        </ul>
    </div>
@endif
</div>

<style>
.search:hover{
    background-color: #ddd;
}
</style>