@extends('task1.layout')
@section('content')
<div class="columns-wrap clearfix">
    <div class="columns-left clearfix">
        <div class="slider-content">
            <img src="{{asset('images/1.jpg')}}" alt="img 1" title="learn english"/>
        </div>
    </div>
    <div class="columns-middle clearfix">
        <div class="slider-content">
           <img src="{{asset('images/2.jpg')}}" alt="img 1" title="learn english"/>
        </div>
    </div>
    <div class="columns-right clearfix">
        <div class="slider-content">
            <img src="{{asset('images/3.jpg')}}" alt="img 1" title="learn english"/>
        </div>
    </div>  
</div>

@stop