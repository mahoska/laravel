<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <title>Task 2</title>
    
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet">
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/script.js')}}" type="text/javascript"></script>
    </head>
    <body>
        <div class="head">
        @section('head')
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
            <div class="container" >
               <div class="collapse navbar-collapse" style="width:80%;  ">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Laravel Second</a></li>
                  <li><a href="{{asset('/')}}">Artists</a></li>
                </ul>
              </div>
            </div>
          </nav>   <!--/.nav-collapse -->
        @show
        </div>
        <div class="clear"></div>
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
        <div class="footer">
        @section('footer')
        Copyright, 2017
        @show
        </div>
    </body>
</html>
