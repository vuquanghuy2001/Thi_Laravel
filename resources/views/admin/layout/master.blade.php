<!doctype html>
<html lang="vi">
<head>
    <base href="{{ asset('') }}">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Admin - Practical_Exam_Laravel</title>

    <link rel="shortcut icon" type="image/png" href="img/favicon.ico"/>

    <!-- Style Sheet -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.12.1-web.all.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-4.4.1-dist.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/my_style.css"/>
</head>
<body>
<div class="container-fluid m-0 p-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container p-0">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row mt-5">

            <div class="col-lg-3 vertical_menu mb-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="admin">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="admin/product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/category">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="admin/user">User Manager</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                @include('admin.errors.all_errors')
                @include('admin.notifications.all_notifications')

                @yield('main')
            </div>
        </div>

    </div>
</div>

<!-- Script -->
<script src="js/jquery-3.4.1.slim.min.js "></script>
<script src="js/popper.min.js "></script>
<script src="js/bootstrap-4.4.1-dist.min.js "></script>
<script src="js/my_scripts.js "></script>

</body>
</html>
