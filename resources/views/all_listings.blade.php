<html>
<head>
  <title>{{$heading}}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="small_description">
  <h1>{{$heading}}</h1>
  <hr/>
  @unless(count($listings) == 0)
  @foreach($listings as $listing)
    <div class="small_description">
      <h2>
        <a href="/listings/{{$listing['id']}}">
          {{$listing['title']}}
        </a>
      </h2>
      <div>
        {{$listing['description']}}
      </div>
    </div>
  @endforeach
  @else
  <div class="small_description">No listings found</div>
  @endunless
</div>
</body>
</html>