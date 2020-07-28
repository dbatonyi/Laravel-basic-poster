<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel Poster</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
    
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @if (Request::is('/'))
        @include('inc.showcase')
        @endif
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8">
            @yield('content')
        </div>
        
    </div>
    </div>  

    <footer id="footer" class="text-center">
        <p>Copyright 2020 &copy; DB</p>
    </footer>
</body>
</html>