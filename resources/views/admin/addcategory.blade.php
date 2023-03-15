@extends('layouts.admindesign')

@section('content')


<h1 class="text-center">Add Category</h1>

@if(session()->has('success'))
    <div class="container alert alert-primary" role="alert">
        {{session()->get('success')}}
    </div>
@endif

    <form action="{{route('category.store')}}" method="post">
        @csrf
        <div class="container">

            <h4>Category Name :</h4>
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">$</span>
            <input type="text" class="form-control" placeholder="Category name" name="name" aria-label="Username" aria-describedby="addon-wrapping" required>
            <button class="btn btn-dark py-2 px-5" type="submit">
                Add
            </button>
        </div>


        </div>
    </form>






@endsection
