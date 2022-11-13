<!DOCTYPE html>
<head>
  <title>{{$heading}}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<div>
  <h1>{{$listing['title']}}</h1>
  <p>
    {{$listing['description']}}
  </p>
</div>
<div style="width:100%;" class="margin-lg">
  <center>
    <strong>
      <a href="/listings/all" class="button">
        Back to All Listings
      </a>
    </strong>
  </center>
</div>
</body>
</html>