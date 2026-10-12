<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" crossorigin="anonymous" />

    <title>@yield('title','Online Store')</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index')}}">Online Store</a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link active" href="{{ route('home.index')}}">Home</a>
            <a class="nav-link active" href="{{ route('home.about')}}">About</a>
        </div>
    </div>
</nav>

<header class="masthead bg-primary text-white text-center py-4">
    <div class="container">
        <h2>
            @yield('subtitle','Online Store - Laravel Framework')
        </h2>
    </div>
</header>

<div class="container my-4">
    @yield('content')
</div>

<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small>
            Copyright - CKC
        </small>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
