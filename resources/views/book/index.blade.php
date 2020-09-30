@extends('book/app')

@section('head')
<title>Geincos Books</title>
@endsection


@section('main-content')
<div class="col-md-8 mx-auto my-4 p-2">
    <h5 class="my-3">Geincons Books Collection</h5>
    <div class="card">
        <table class="table table-striped table-success">
            <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center"scope="col">Book Name</th>
                    <th class="text-center"scope="col">Author</th>
                    <th class="text-center"scope="col">Price</th>
                    <th class="text-center"scope="col">QTY</th>
                    <th class="text-center"scope="col">Image</th>
                    <th class="text-center"scope="col">Created At</th>
                    <th class="text-center"><a href=""><i class="fa fa-trash-o text-danger" aria-hidden="true"></i>Delete</a></th>
                    <th class="text-center"><a href=""><i class="fa fa-pencil text-success" aria-hidden="true"></i>Update</a></th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
@endsection