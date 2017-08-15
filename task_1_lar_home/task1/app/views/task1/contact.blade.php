@extends('task1.layout')
@section('content')
<div class="contact">
<form role="form" method="post">
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter name" name="name">
  </div>
   <div class="form-group">
    <label for="exampleInputMessage">Message</label>
    <textarea class="form-control" rows="3" id="exampleInputMessage" placeholder="Enter message" name="message"></textarea>
  </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Send</button>
    </div>
  </div>
</form>
</div>
@stop

