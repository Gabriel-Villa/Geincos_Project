@extends('book/app')

@section('head')
<title>Geincos Books</title>
@endsection


@section('main-content')
<div class="col-md-8 mx-auto my-4 p-2">
    <div class="row d-flex justify-content-between p-4">
        <h5 class="my-3">Geincons Books Collection</h5>
        <a class="btn btn-success" href="{{ route('create') }}">No Books? Create one !</a>
    </div>

    @if(session('mensaje'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('mensaje')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="card">
        <table class="table table-striped table-warning">
            <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Book Name</th>
                    <th class="text-center" scope="col">Author</th>
                    <th class="text-center" scope="col">Price</th>
                    <th class="text-center" scope="col">QTY</th>
                    <th class="text-center" scope="col">Image</th>
                    <th class="text-center"><i class="fa fa-pencil text-primary" aria-hidden="true"></i> Update</th>
                    <th class="text-center"><i class="fa fa-trash-o text-danger" aria-hidden="true"></i> Delete</th>

                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->name}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->price}}</td>
                    <td>{{$book->qty}}</td>
                    <td>{{$book->image}}</td>
                    <td><a class="btn btn-success p-1 pr-4 pl-4" href="{{route('edit', $book)}}">Edit</a></td>
                    <td>
                        <form class="d-inline" action="{{ route('destroy' , $book) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$books->links()}}
    </div>
</div>
@endsection