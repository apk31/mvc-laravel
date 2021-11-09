<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    @yield('head')
</head>

<body style="margin:0;">

    {{-- <div class="container-fluid jumbotron jbg"></div>
    <!-- <div class="container-fluid text-center" style="margin-top: 20px;"></div> --> --}}
    @yield('main')
    <footer class="text-center" style="margin-top: 10px;bottom:0;position:absolute;width: 100%;">
        <p>&copy Copyright 2021 by Penguin Berjalan</p>
    </footer>
</body>

</html>