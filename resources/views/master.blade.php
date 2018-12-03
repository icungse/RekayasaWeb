<html>
<head>
    <title> @yield('title') </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    
    <link rel="stylesheet" href="/css/bootstrap-material-design.min.css">
</head>
<body>

@include('shared.navbar')
@yield('content')

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>


</body>
</html>