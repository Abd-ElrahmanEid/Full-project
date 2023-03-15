@extends('layouts.admindesign')

@section('content')
    <h1 class="text-center">All Users</h1> <br>

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
                <th scope="col">E-Mail</th>
                <th scope="col">Created_at</th>
                <th scope="col">Updated_at</th>

                <th scope="col">Delete</th>



            </tr>
            </thead>
            <tbody>

            @foreach($users as $user)
                <tr>
                    <td >{{$user->id}}</td>
                    <td >{{$user->name}}</td>
                    <td >{{$user->email}}</td>
                    <td >{{$user->created_at}}</td>
                    <td >{{$user->updated_at}}</td>
                    <td>
                        <form action="{{route('adminuser.destroy', $user->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" >Delete</button>
                        </form>
                    </td>
                </tr>

            @endforeach




            </tbody>
        </table>
    </div>


@endsection()
