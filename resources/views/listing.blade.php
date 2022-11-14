<!DOCTYPE html>
<head>
  <title>{{$heading}}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="small_description">
  <h1>{{$listing['title']}}</h1>
  <hr/>
  <div>
    <strong>Company: </strong>{{$listing['company']}}<br/>
  </div>
  <div>
    <strong>Email: </strong>{{$listing['email']}}<br/>
  </div>
  <div>
    <strong>Web URL: </strong>{{$listing['website']}}<br/>
  </div>
  <div>
    <strong>Location: </strong>{{$listing['location']}}<br/>
  </div>
  <div>
    <strong>Description: </strong>{{$listing['description']}}<br/>
  </div>
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