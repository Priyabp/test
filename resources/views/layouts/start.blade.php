<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blueshak | @yield('title')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        @section('css')
           @include('layouts.includes.headerIncludes')
        @show

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        @section('js')
            @include('layouts.includes.headerJsIncludes')
        @show
    </head>
    <body class="hold-transition login-page">
      <div class="login-logo">
         <a href="{{ url('/login') }}"><img src="{{URL::asset('assets/images/logo.png') }}" class="img"></a>
      </div>
    
      <!-- /.login-logo -->
    
      <div class="login-box">
      
      <div class="login-box-body">
     	<p class="login-box-msg">@yield('content-header')</p>
        @yield('content')
     </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
    
    </body>
</html>

