<x-layout>
  @include('partials._hero')
  @include('partials._search')

  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @unless(count($listings) == 0)
      @php
          if (request('tag') != null) {
            echo "<strong><i>Only showing tags containing: " . request('tag') . "</i></strong><br/>";
            echo "<span class='text-red-600'><small><a href='/'>Clear tag filter.</a></small></span>";
          }

          if (request('search') != null) {
            echo "<i>Only showing listings whose Title, Description, or Tags contain: '" . request('search') . "'</i><br/>";
            echo "<span class='text-red-600'><small><a href='/'>Clear search filter.</a></small></span>";
          }
      @endphp
      @foreach($listings as $listing)
        <x-listing-card :listing="$listing" />
      @endforeach
    @else
      <p><i>No listings found</i></p>
    @endunless
  </div>
</x-layout>