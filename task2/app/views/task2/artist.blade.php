@extends('task2.layout')
@section('content')
<h3 class="green">Albums by the artist -  {{{$name}}}:</h3>
<div class="articles-list">
      <div class="col-sm-12 col-md-12">
        <div class="thumbnail category-item">
          <div class="caption">
            <ul class="list-group">
            @foreach($albums as $album)
                <a href="{{asset("/album/".$album['AlbumId'])}}">   
                    <li class="list-group-item list-group-item-info news_title"> 
                         {{{$album['Title']}}}
                    </li>
                </a>
            @endforeach
            </ul>
              </div>
        </div>
      </div>
</div>
@stop
