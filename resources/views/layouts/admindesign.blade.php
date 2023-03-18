<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    {{--fontawesome--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{--link Css--}}
    <link href="{{asset('css/style.css')}}" rel="stylesheet">


    <title>Document</title>
</head>

{{-----body--------------------------------------------------------------}}
<body style="background-image: url({{'/Images/f.png'}}); background-size: cover">


<nav class="navbar navbar-expand-lg navbar-light " style="background-color: white">
    <div class="container px-4 px-lg-5" >
        <a class="navbar-brand fs-1" style="font-family: 'Alex Brush', cursive;">Fashion</a>
        <!-- Humburger Menu -->
        <button class="navbar-toggler jus" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active fw-bold" href="{{url('admin')}}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link active fw-bold" href="{{route('category.create')}}">Add Category</a></li>
                <li class="nav-item"><a class="nav-link active fw-bold" href="{{route('adminproduct.create')}}">Add Product</a></li>
                <li class="nav-item"><a class="nav-link active fw-bold" href="{{route('adminproduct.index')}}">View Products</a></li>
                <li class="nav-item"><a class="nav-link active fw-bold" href="{{route('adminuser.index')}}">View Users</a></li>

            </ul>

            <!-- Authentication -->
            <form class="mt-4" method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-dark">Logout</button>
            </form>
        </div>

    </div>
</nav>








@yield('content')






<br><br>
{{--footer------------------------------------------------------------}}

<div class="container-fluid bg-dark" id="news">

    <div class="container py-5">

        <div class="text-center">

            <h1 class="fw-bold text-light " style="font-family: alex brush; font-size: 60px;">Fashion</h1> <br>
            <P class="text-light fs-3">
                “ Fashion is a form of ugliness so intolerable that we have to alter it every six months ” <br>
                ― Oscar Wilde
            </P>

        </div> <br><br><br>


        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-sm-5 d-flex justify-content-center">
                <a class="btn text-light fw-bold px-5 py-3 " style="background-color: #3b5998; " href="https://www.facebook.com/abdo.eid.9212301" target="_self">
                    Find Me on Facebook
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-sm-5 d-flex justify-content-center">
                <a class="btn text-light fw-bold px-5 py-3" style="background-color: #E1306C; " href="https://www.instagram.com/abdelrahmann_eidd/" target="_self">
                    Find Me on Instagram
                </a>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-sm-5 d-flex justify-content-center">
                <a class="btn text-light fw-bold px-5 py-3" style="background-color: #053eff; " href="https://www.behance.net/Abd-elrahman-eid" target="_self">
                    Find Me on Behance
                </a>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-5">
                <ul class="text-light ">
                    <ol class="fw-bolder pb-2 p-sm-0 ">HOME</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Women</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Men</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Accessories</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Sales</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Blogs</ol>
                </ul>
            </div>


            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-5">
                <ul class="text-light ">
                    <ol class="fw-bold pb-3 p-sm-0 pb-sm-2">CATEGORIES</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Jackets and Coats</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Skirts and Dresses</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Shoes, Boots and Slippers</ol>
                    <ol class="fw-lighter pb-2 p-sm-0">Sweaters and Waistcoats</ol>
                </ul>
            </div>


            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 px-5">

                <ul class="text-light ">
                    <ol class="fw-bold pb-3 p-sm-0 pb-sm-2">IMPORTANT LINKS</ol>
                    <ol class="fw-lighter pb-2 p-sm-0"><a href="https://eg.hm.com/en/?g_campaign=HM_EGY_gbs_en_4_Brand-Pure-Exact_r&g_adtype=search&g_adgroupid=84885507284&g_campaignid=8057111274&g_adid=615896644762&g_network=g&g_keyword=hm&g_keywordid=kwd-105130815&g_acctid=377-512-1586&gclid=CjwKCAiAmJGgBhAZEiwA1JZolq-gdhED38m0JxCTlztIag-OvfpfOsWw37obw_iU-xj6eKUHwjPDOxoC-9IQAvD_BwE" style="text-decoration: none; color: white;"> H&M Website</a></ol>

                    <ol class="fw-lighter pb-2 p-sm-0"><a href="https://www.lcwaikiki.eg/en-US/EG?gclid=CjwKCAiAmJGgBhAZEiwA1JZolgt7gQ2YtNB5RVS5aOWeuJOPEvZ-6Ba7BbS1QUyXEFNogtjR2gx-cBoCrIkQAvD_BwE" style="text-decoration: none; color: white;"> LC Waikiki Website</a></ol>

                    <ol class="fw-lighter pb-2 p-sm-0"><a href="https://www.versace.com/on/demandware.store/Sites-US-Site/en_US/Default-Start?&wt_mc=WW.SEM.Google.Text&utm_campaignname=01_Top_Brand_Exact_INT_WW&utm_adgroup=Exact&utm_term=versace&s_kwcid=AL!6089!3!513358848869!e!!g!!versace&gclid=Cj0KCQiA9YugBhCZARIsAACXxeK9ap8zfqbChpGs0Fm_2BOtrNTYUleTCykXygJ3Y3-EypYFnXnzJSsaAovuEALw_wcB&gclsrc=aw.ds" style="text-decoration: none; color: white;"> Versace Website</a></ol>

                </ul>
            </div>
        </div>

        <br><hr class="text-light"><br>
        <p class="text-light fw-lighter text-center">
            <span>&#169</span> 2023 <span style="font-family: Alex brush; font-size: 28px;">Fashion</span> : Templete Made by <span class="fw-bold">Abd-Elrahman Eid Mohamed ( FullStack Developer & UI / UX Designer ).</span>
        </p> <br>

    </div>
</div>













<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- link JS-->
<script type="text/javascript" src="{{asset('js/design.js')}}"></script>
</body>
</html>

