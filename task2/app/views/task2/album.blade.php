@extends('task2.layout')
@section('content')
<h3 class="green">Tracks from the album artist - {{{$artistName}}}</h3>
<div class="articles-list">
      <div class="col-sm-12 col-md-12">
        <div class="thumbnail category-item">
          <div class="caption">
            <ul class="list-group">
            @foreach($tracks as $track)
                <a href="{{asset("/track/".$track['TrackId'])}}">   
                    <li class="list-group-item list-group-item-info news_title"> 
                         {{{$track['Name']}}}
                    </li>
                </a>
            @endforeach
            </ul>
              </div>
        </div>
      </div>
</div>
@stop
