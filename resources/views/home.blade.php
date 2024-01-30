@extends('layouts.app')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="./Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.2.1-web/css/all.css">
    {{-- --Link to call stylesheet--- <link rel="stylesheet" href="./style.css>------------------ --}}

    <title>Side Menu</title>

    <style>
        .navbar-custom{background-color: navy;}
        .navbar-custom .navbar-nav .nav-link {color: azure}
    </style>
</head>
<body>
    @section('content')
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="navbar-custom col-auto col-md-4 col-lg-2 min-vh-100 d-flex flex-column justify-content-between">
                    <div class="navbar-custom p-2">
                        <a class="d-flex text-decoration-none mt-1 align-items-center text-white">
                            <span class="fs-4 d-none d-sm-inline">SideMenu</span>
                        </a>
                        <ul class="nav nav-tabs flex-column mt-4">
                            <li class="nav-item py-2 py-sm-0">
                                <a href="#" class="nav-link text-white">
                                    <i class="fs-5 fa fa-gauge"></i><span class="fs-4 ms3 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item py-2 py-sm-0">
                                <a href="#" class="nav-link text-white">
                                    <i class="fs-5 fa fa-house"></i><span class="fs-4 ms3 d-none d-sm-inline">Home</span>
                                </a>
                            </li>
                            <li class="nav-item py-2 py-sm-0">
                                <a href="#" class="nav-link text-white">
                                    <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms3 d-none d-sm-inline">Articles</span>
                                </a>
                            </li>
                            <li class="nav-item py-2 py-sm-0">
                                <a href="#" class="nav-link text-white">
                                    <i class="fs-5 fa fa-table-list"></i><span class="fs-4 ms3 d-none d-sm-inline">Products</span>
                                </a>
                            </li>
                            <li class="nav- py-2 py-sm-0">
                                <a href="#" class="nav-link text-white">
                                    <i class="fs-5 fa fa-clipboard"></i><span class="fs-4 ms3 d-none d-sm-inline">Orders</span>
                                </a>
                            </li>
                            <li class="nav- py-2 py-sm-0">
                                <a href="#" class="nav-link text-white">
                                    <i class="fs-5 fa fa-users"></i><span class="fs-4 d-none d-sm-inline">Customers</span>
                                </a>
                            </li>
                        </ul>
                        
                    </div>
                    {{-- <div class="dropdown open open p-3"> this is profile of the user or user name
                        <button class="btn border-none dropdown-toggle btn btn-light" type="button" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="fa fa-user"></i><span class="ms-2">Zimisele</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="triggerId">
                            <button class="dropdown-item" href="#">Setting</button>
                            <button class="dropdown-item disabled" href="#">Profile</button>
                        </div>
                    </div> --}}
                </div>
                {{-- content here --}}
                <div class="p-3">
                    <h2>Content goes here</h2>
                </div>
            </div>
        </div>
    @endsection

    <script src="./Bootstrap/js/bootstrap.bundle.js"></script>


   {{-- -------------Below is the old code --------------- 

    @section('content')
        <div class="container">
            {{-- <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Dashboard') }}</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ __('You are logged in!') }}
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    @endsection --}}
    
</body>
</html>

