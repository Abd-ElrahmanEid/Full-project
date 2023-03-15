@extends('layouts.admindesign')

@section('content')




<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-evenly">


            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{asset('/storage/'. $products->image )}}"/>
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-start">
                            <h5 class="fw-bolder">{{$products->name}}</h5>
                            <p>{{$products->description}}</p>
                            Price : {{$products->price}} $
                        </div>
                    </div>

                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <a class="alert alert-dark mt-auto" style="text-decoration: none" href="{{route('adminproduct.index')}}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection()
