<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
	<title>Layout</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    {{--<link rel="stylesheet" href="/css/style.css">--}}
    @yield('header')
</head>
<body>
    <div class="container">
        @yield('content')
    </div>


 @yield('footer')

</body>
</html>