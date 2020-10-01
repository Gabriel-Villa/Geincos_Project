@extends('book/app')

@section('head')
<title>Update Book</title>
@endsection


@section('main-content')

@if ($singleBook)
<div class="col-md-7 mx-auto my-4 p-2">

    <h4 class="my-4">Update a Book</h4>

    @if(session('mensaje'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{session('mensaje')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <form action="{{ route('update', $singleBook->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" name="name" class="form-control" id="inputName"  value="{{ $singleBook->name }}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAuthor">Author</label>
                <input type="text" name="author" class="form-control" id="inputAuthor" value="{{ $singleBook->author }}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPrice">Price</label>
                <input type="number" name="price" class="form-control" min="0" value="0" maxlength="6" id="inputPrice"
                value="{{ $singleBook->price }}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputQty">QTY</label>
                <input type="number" name="qty" class="form-control" min="0" value="0" maxlength="6" id="inputQty"
                value="{{ $singleBook->qty }}">
            </div>
        </div>
        <button type="submit" class="btn btn-danger mt-3 w-25">Update</button>

    </form>

</div>
@else
<div class="col-md-5 mx-auto mt-4">
    <h3 class="text-center my-4">Nothing here !</h3>
    <a class="mt-4 text-center" href="{{ route('inicio')}}">
        <h5><i class="fa fa-arrow-left" aria-hidden="true"></i> Return Back</h5>
    </a>
</div>
@endif


@endsection