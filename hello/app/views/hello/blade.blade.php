@extends('hello.layout')
@section('content')

<p>This is my content</p>

<ul>
@foreach($list as $num)
<li><p>{{{$num}}}</p></li>
@endforeach
</ul>

@if($ival >10)
<p>ival > 10
@else
<p>ival is less then 10<p>
@endif

@include("hello.sub")

@stop


@section('head')
@parent
<p>new head</p>
@stop






