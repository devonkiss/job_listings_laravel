@php
  use Illuminate\Http\Request;
  $create = \Request::path();
  if ($create != "listings/create") {
@endphp

    <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">
      Post a Listing
    </a>

@php
  }
@endphp