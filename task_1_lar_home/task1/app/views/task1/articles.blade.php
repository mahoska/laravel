@extends('task1.layout')
@section('content')
<div class="articles-list">
      <div class="col-sm-12 col-md-12">
        <div class="thumbnail category-item">
          <div class="caption">
            <ul class="list-group">
            @foreach($articles as $article)
                <a href="{{asset("/article/".$article['id'])}}">   
                    <li class="list-group-item list-group-item-info news_title"> 
                         {{{$article['title']}}}
                    </li>
                </a>
            @endforeach
            </ul>
              </div>
        </div>
      </div>
</div>
@stop

