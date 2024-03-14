<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>


</head>
<body>
<style>
        body {
    padding: 0px;
    margin: 0px;
}.content {
    padding: 30px;
}
nav {
    background: #eee;
    padding: 20px;
    height: 100vh;
}
td.dt-type-numeric {
    text-align: left !important;
}th.dt-type-numeric {
    text-align: left !important;
}
</style>
    <main>
<div class="container-fluid">

<div class="row">
    <div class="col-md-2">
        <div class="row">
        <nav>
    <ul>
    <li>Products
            <ul>
                <li><a href="{{route('products')}}">Products</a></li>
                <li><a href="{{route('categories')}}">Categories</a></li>
            </ul>
        </li>

        <li>API
            <ul>
                <li><a href="{{route('bellam')}}">Bella Maison</a></li>
            </ul>
        </li>
    </ul>
</nav>
</div>
    </div>
    <div class="col-md-10">
        <div class="content">
        @yield('content')
        </div>
    </div>
</div>

</div>
</main>
<footer>


</footer>

<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
new DataTable('#nTable');
</script>


</body>
</html>