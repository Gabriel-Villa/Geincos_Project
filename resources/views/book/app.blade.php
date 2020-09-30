<!DOCTYPE html>
<html lang="en">

<head>
    @include('book/layouts/head')
</head>

<body>
    @include('book/partials/navigation')

    @section('main-content')
        @show

    @include('book/layouts/footer')
</body>

</html>