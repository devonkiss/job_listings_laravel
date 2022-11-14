@extends('layout')

@section('content')
<div class="small_description">
  <h3>{{$listing['title']}}</h3>
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
@endsection