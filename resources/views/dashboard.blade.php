<x-app-layout>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home</title>


        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    </head>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Aleo:wght@300&display=swap');

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        h2 {
            width: 80%;
            text-align: center;
            border-bottom: 1px solid #000;
            line-height: 0.1em;
            margin: auto;

        }

        h2 span {
            background: whitesmoke;
            padding:0 10px;
        }

    </style>

    <body style="background-color: whitesmoke;">




    <!-- Nav ------------------------------------------------------------------------>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: white">
        <div class="container px-4 px-lg-5" >
            <a class="navbar-brand fs-1" style="font-family: 'Alex Brush', cursive;">Fashion</a>

            <div class="navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" href="">Women</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Men</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Footwear</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Accessories</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Sales</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Blog</a></li>
                </ul>

            </div>
        </div>
    </nav>




    <!-- Carousel ------------------------------------------------------------------------>
    <div id="carouselExampleFade" class="carousel slide carousel-fade p-relative d-flex justify-content-center " data-bs-ride="carousel">

        <div class="position-absolute text-center w-50 text-light mt-5 "
             style="height: 150px; background-color:rgba(255, 255, 255, 0.55); z-index: 999;">
            <p class="p-3 fs-3 text-dark fw-bolder" style="font-family: 'Aleo'; letter-spacing: 3px; opacity: 0.8;">FASHION <br> & <br> MODEL </p>
        </div>
        <div class="carousel-inner" >

            <div class="carousel-item active">
                <img src="{{asset('images/d.jpg')}}" class="d-block w-100">
            </div>

            <div class="carousel-item">
                <img src="{{asset('images/c.jpg')}}" class="d-block w-100">
            </div>

        </div>

        <span class="carousel-control-prev"
              type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </span>

        <span class="carousel-control-next"type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </span>
    </div> <br><br><br><br><br>





    <!--    Most Popular Collections ------------------------------------------------------------------------>
    <h2 style="font-family: Aleo;"><span> Mots Popular Collections</span></h2>

    <section class="py-3" >
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">


                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('images/w.jpg')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h4 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Women Collections</h4>

                                <!-- Product description-->
                                New Modern Trends For Women Clothes
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                        </div>
                    </div>
                </div>


                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('images/k.jpg')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Kids Collections</h5>

                                <!-- Product description-->
                                New Modern Trends For Kids Clothes
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                        </div>
                    </div>
                </div>



                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('images/m.jpg')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Men Collections</h5>

                                <!-- Product description-->
                                New Modern Trends For Men Clothes
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#">Shop Now</a></div>
                        </div>
                    </div>
                </div>



                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('images/o.jpg')}}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder" style="font-family: Aleo; margin-bottom: 20px;">Family Collections</h5>

                                <!-- Product description-->
                                New Modern Trends For Your Family
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" style="font-family: Aleo;" href="#" >View All</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> <br><br>



    <!-- Our Offers  --------------------------------------------------------------------------------- -->
    <h2 style="font-family: Aleo;"><span> Our Offers</span></h2> <br><br>

    <!-- Header-->
    <header class="container-fluid bg-dark py-5 " style="background-image: url(./Images/offer\ 2.png); height: 50vh;">
        <div class="text-center text-white" style="font-family: Aleo;" >
            <h1 class="display-2 fw-bolder">Shop in style</h1>
            <p class="lead fw-bolder text-white mb-0 ">We Offer Suitable Price Start From 70%</p>
        </div>
        </div>
    </header> <br><br><br><br><br><br>







    <!-- Trending Products  --------------------------------------------------------------------------------- -->
    <h2 style="font-family: Aleo;"><span>Trending Products</span></h2> <br><br><br>

    <!-- Search button-->

    <form action="{{route('search.index')}}" method="get" style="display: flex; justify-content: center; ">
        @csrf
        <div class="form-outline">
            <input type="search" id="form1" class="form-control" placeholder="Search" name="search"/>
        </div>
        <button type="submit" class="btn btn-dark">
            <i class="fas fa-search"></i>
        </button>
    </form> <br>

    @if(session()->has('success'))
        <div class="container alert alert-info" role="alert">
        {{session()->get('success')}}
    </div>
    @endif

    <!-- Sections cards-->
    <section class="py-4">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


                @forelse($products as $product)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('/storage/'.$product->image)}}"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$product->name}}</h5>

                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>

                                <!-- Product description-->
                                <p>{{$product->description}}</p>

                                <!-- Product price-->
                                <p>Price : {{$product->price}} $</p>

                                <!-- 3 tabs -->
                                <div style="display: flex; justify-content: space-evenly;">
                                        <span style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px;">
                                            <i class="fa-solid fa-heart" onMouseOver="this.style.color='red'" onMouseOut="this.style.color='black'"></i>
                                        </span>


                                    <a href="{{route('show' , $product->id)}}" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; color: black">
                                            <i class="fa-solid fa-eye" onMouseOver="this.style.color='Blue'" onMouseOut="this.style.color='black'"></i>
                                        </a>

                                    <a href="{{route('cart.add' , $product->id)}}" style="border: 1px solid grey; padding: 10px 15px; border-radius: 50px; font-size: 20px; background-color: transparent; color: black;">
                                        <i class="fa-solid fa-cart-shopping" onMouseOver="this.style.color='HotPink	'" onMouseOut="this.style.color='black'">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                    @empty
                    <div class="alert alert-danger" role="alert">
                        Sorry, This product Not Found
                    </div>
                @endforelse



            </div>
        </div>
    </section> <br><br><br>





    <!-- ----------------------------------------------------------------------------- -->


    <header class="container-fluid bg-dark py-5 " style="background-image: url(./Images/18.png); height: 50vh; background-size: cover;">
        <div class="text-center text-white" style="font-family: Aleo;" >
            <h1 class="display-2 fw-bolder">“</h1>
            <p class="lead fw-bolder text-white mb-0 fs-3 ">"Style is a way to say who you are without having to speak. —Rachel Zoe"</p>
        </div>
        </div>
    </header> <br><br><br><br><br>


    <!-- Blogs  --------------------------------------------------------------------------------- -->

    <h2 style="font-family: Aleo;"><span>Blogs</span></h2> <br><br><br>


    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">


                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('images/19.png')}}"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-start">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product reviews-->

                                <p>is a form of self-expression and autonomy at a particular period and place and in a specific context, of clothing, footwear, lifestyle, accessories, makeup, hairstyle, and body posture. </p>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-start"><a class="btn btn-outline-dark mt-auto" href="#">Read More</a></div>
                        </div>
                    </div>
                </div>



                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('images/20.png')}}"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-start">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product reviews-->

                                <p>is a form of self-expression and autonomy at a particular period and place and in a specific context, of clothing, footwear, lifestyle, accessories, makeup, hairstyle, and body posture. </p>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-start"><a class="btn btn-outline-dark mt-auto" href="#">Read More</a></div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{asset('images/21.png')}}"/>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-start">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product reviews-->

                                <p>is a form of self-expression and autonomy at a particular period and place and in a specific context, of clothing, footwear, lifestyle, accessories, makeup, hairstyle, and body posture. </p>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-start"><a class="btn btn-outline-dark mt-auto" href="#">Read More</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>





    <!-- Footer  --------------------------------------------------------------------------------- -->

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
    </body>
    </html>




</x-app-layout>
