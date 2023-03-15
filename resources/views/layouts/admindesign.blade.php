

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <title>Document</title>
</head>
<body style="background-image: url({{'/Images/f.png'}}); background-size: cover">


<nav class="navbar navbar-expand-lg navbar-light " style="background-color: white">
    <div class="container px-4 px-lg-5" >
        <a class="navbar-brand fs-1" style="font-family: 'Alex Brush', cursive;">Fashion</a>
        <!-- Humburger Menu -->
        <button class="navbar-toggler jus" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" href="{{url('admin')}}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{route('category.create')}}">Add Category</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{route('adminproduct.create')}}">Add Product</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{route('adminproduct.index')}}">View Products</a></li>
                <li class="nav-item"><a class="nav-link active" href="{{route('adminuser.index')}}">View Users</a></li>

            </ul>
        </div>
        <!-- Authentication -->
        <form class="mt-4" method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="btn btn-dark">Logout</button>
        </form>
    </div>
</nav>


@yield('content')






<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

