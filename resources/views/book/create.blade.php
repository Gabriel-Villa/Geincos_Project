@extends('book/app')

@section('head')
<title>Create Book</title>
@endsection


@section('main-content')
<div class="col-md-7 mx-auto my-4 p-2">

    <h4 class="my-4">Create a new Book</h4>

    <!-- Success message -->
    @if(session('mensaje'))
    <div class="alert alert-warning alert-dismissible fade show" id="session-message" role="alert">
        <strong>{{session('mensaje')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <!-- Errors message -->
    @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="alert alert-warning" role="alert">
        {{ $error }}
    </div>
    @endforeach
    @endif

    <form action="{{ route('create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Name</label>
                <input type="text" name="name" class="form-control" id="inputName" placeholder="Book Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAuthor">Author</label>
                <input type="text" name="author" class="form-control" id="inputAuthor" placeholder="Author">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputPrice">Price</label>
                <input type="number" name="price"  step="0.01" class="form-control" min="0"  maxlength="6" id="inputPrice"
                    placeholder="0.00">
            </div>
            <div class="form-group col-md-6">
                <label for="inputQty">QTY</label>
                <input type="number" name="qty" class="form-control" min="0"  maxlength="6" id="inputQty"
                    placeholder="0">
            </div>
        </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="image" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
        <button type="submit" class="btn btn-danger mt-3 w-25">Create</button>

    </form>

</div>
@endsection

@section('footer')
    <script>
            const d = document;
            d.addEventListener("DOMContentLoaded", (event) => {
                setTimeout(() => d.querySelector('#session-message').remove(), 3000);
            });     
    </script>
@endsection
