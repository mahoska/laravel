@extends('task2.layout')
@section('content')
<div class='panel panel-info'>
<div class="panel-heading">{{$nameTrack}}</div>
<table class="table table-bordered table-striped trackTable">
<tr>
@foreach($track as $key=>$val)
<th>{{$key}}</th>
@endforeach
</tr>
<tr>
@foreach($track as $key=>$val)
<td>{{$val}}</td>
@endforeach
</tr>
</table>
</div>
@stop
