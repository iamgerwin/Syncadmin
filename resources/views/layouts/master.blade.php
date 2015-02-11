<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="John Gerwin De las Alas">
    <title>@yield('PAGETITLE') - Sync</title>

    <link rel="stylesheet" href="{{asset('bs/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('eui/themes/bootstrap/easyui.css')}}">
    <link rel="stylesheet" href="{{asset('eui/themes/icon.css')}}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('HEADER')
</head>
<body>
    @yield('MENU')

    @yield('CONTENT')
</body>
    <script src="{{asset('eui/jquery.min.js')}}"></script>
    <script src="{{asset('eui/jquery.easyui.min.js')}}"></script>
    @yield('FOOTER')
</html>
