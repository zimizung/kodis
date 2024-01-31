@extends('layouts.app')
<html lang="en">

    <head>

        <style>
            .navbar-custom {
                background-color: navy;
            }

            .navbar-custom .navbar-nav .nav-link {
                color: azure
            }
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
                                        <i class="fs-5 fa fa-gauge"></i><span
                                            class="fs-4 ms3 d-none d-sm-inline">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nav-item py-2 py-sm-0">
                                    <a href="#" class="nav-link text-white">
                                        <i class="fs-5 fa fa-house"></i><span class="fs-4 ms3 d-none d-sm-inline">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item py-2 py-sm-0">
                                    <a href="/leave" class="nav-link text-white">
                                        <i class="fs-5 fa fa-table-list"></i><span
                                            class="fs-4 ms3 d-none d-sm-inline">Leaves</span>
                                    </a>
                                </li>
                                <li class="nav-item py-2 py-sm-0">
                                    <a href="/pension" class="nav-link text-white">
                                        <i class="fs-5 fa fa-table-list"></i><span
                                            class="fs-4 ms3 d-none d-sm-inline">Pension</span>
                                    </a>
                                </li>
                                <li class="nav- py-2 py-sm-0">
                                    <a href="#" class="nav-link text-white">
                                        <i class="fs-5 fa fa-clipboard"></i><span
                                            class="fs-4 ms3 d-none d-sm-inline">Orders</span>
                                    </a>
                                </li>
                                <li class="nav- py-2 py-sm-0">
                                    <a href="#" class="nav-link text-white">
                                        <i class="fs-5 fa fa-users"></i><span class="fs-4 d-none d-sm-inline">Customers</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="p-3">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        @endsection
        <script src="./Bootstrap/js/bootstrap.bundle.js"></script>
    </body>
</html>
