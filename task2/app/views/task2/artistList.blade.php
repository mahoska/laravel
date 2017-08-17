@extends('task2.layout')
@section('content')
<div class="articles-list">
      <div class="col-sm-12 col-md-12">
        <div class="thumbnail category-item">
          <div class="caption">
            <ul class="list-group">
            @foreach($artists as $artist)
                <a href="{{asset("/artist/".$artist['ArtistId'])}}">   
                    <li class="list-group-item list-group-item-info news_title"> 
                         {{{$artist['Name']}}}
                    </li>
                </a>
            @endforeach
            </ul>
              </div>
        </div>
      </div>
</div>
@stop


