@extends('layouts.app')
@section('content')
{{-- Show all Countries --}}
<h2 class="content__title pt-5">All Country</h2>
<div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-6">
@foreach ($countries as $country)
<x-countries-card :country='$country' />
@endforeach
</div>
{{ $countries->links() }}
@endsection