<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="..css/carousel-slider.css">
    <link rel="stylesheet" href="../css/article.css">  
    <link rel="stylesheet" href="../css/app.css">
    <title> CNPM </title>
</head>
<body>
    <div id="main">
        @include('frontend.layouts.header')
        @yield('content')
    </div>
    @include('frontend.layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../js/carousel-slider.js"></script>
    <script src="../js/slide-show.js"></script>
    <script src="../js/layout.js"></script>
</body>
</html> 