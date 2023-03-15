@extends('layouts.admindesign')

@section('content')
    <h1 class="text-center">All Products</h1> <br>

    @if(session()->has('success'))
    <div class="container alert alert-danger" role="alert">
        {{session()->get('success')}}
    </div>
    @endif

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Count</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Delete</th>
                <th scope="col">Show</th>
                <th scope="col">Udpdate</th>

            </tr>
            </thead>
            <tbody>
                @foreach( $products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->count}}</td>
                    <td>{{$product->category->name}}</td>
                    <td>{{$product->description}}</td>
                    <td><img src="{{asset('/storage/'. $product->image )}}" height="90px" width="100px"></td>
                    <td>
                        <form action="{{route('adminproduct.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" >Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route('adminproduct.show' , $product->id)}}" class="btn btn-success">Show</a>
                    </td>

                    <td>
                        <a href="{{route('adminproduct.edit' , $product->id)}}" class="btn btn-warning">Update</a>
                    </td>



                </tr>
                @endforeach()

            </tbody>
        </table>
    </div>


@endsection()
