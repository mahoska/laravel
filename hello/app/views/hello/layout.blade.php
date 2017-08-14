<html>
<head>
<link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>
<div class="head">
@section('head')
<h1>My Layout</h1>
@show
</div>
<div class="content">
@yield('content')
</div>
<div class="footer">
@section('footer')
Copyright, 2017
@show
</div>
</body>
</html>
