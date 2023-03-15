@extends('layouts.admindesign')

@section('content')


    <h1 class="text-center">Update product</h1>

    @if(session()->has('success'))
        <div class="alert alert-warning container" role="alert">
            {{session()->get('success')}}
        </div>
    @endif

    <form class="container" action="{{route('adminproduct.update', $products->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <h5>Product Name :</h5>
        <input type="text" class="form-control" name="name" placeholder="Enter ProductName" >
        @error('name')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br>

        <h5>Product Price :</h5>
        <input type="number" class="form-control" name="price" placeholder="Enter ProductPrice">
        @error('price')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br>

        <h5>Product Count :</h5>
        <input type="number" class="form-control" name="count" placeholder="Enter ProductCount">
        @error('count')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br>

        <h5>Product Category :</h5>
        <select name="category_id" class="form-select" aria-label="Default select example">
            <option selected>Select Product Category</option>
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category_id')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br>

        <h5>Product Description :</h5>
        <textarea class="form-control" name="description" placeholder="Enter Description about Product" rows="3"></textarea>
        @error('description')
        <p style="color:red;">{{$message}}</p>
        @enderror
        <br>

        <button class="btn btn-dark px-5" type="submit">Update</button>

    </form>


@endsection

