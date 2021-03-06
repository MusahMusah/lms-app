<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('frontend/css/mdb.min.css') }}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

    <!-- Intro settings -->
    <style>
        #intro {
            /* Margin to fix overlapping fixed navbar */
            margin-top: 100px;
        }
    </style>

</head>
<body>
<!--Main Navigation-->
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" target="_blank" href="https://mdbootstrap.com/docs/standard/">
                <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="16" alt="" loading="lazy"
                     style="margin-top: -3px;" />
            </a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" aria-current="page"
                           href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('faculty.index') ? 'active' : '' }}"
                           href="{{route('faculty.index')}}" rel="nofollow">
                            Faculty
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ request()->routeIs('courses.index') ? 'active' : '' }}">
                            Courses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ request()->routeIs('department.index') ? 'active' : '' }}">
                            Departments
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav d-flex flex-row">
                    <li class="nav-item" style="margin-right: 3rem">
                       <div class="dropdown">
                           <a
                               class="dropdown-toggle"
                               type="button"
                               id="dropdownMenuButton"
                               data-mdb-toggle="dropdown"
                               aria-expanded="false"
                           >
                               My Account
                           </a>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                               <li><a class="dropdown-item" href="#">My profile</a></li>
                               <li><a class="dropdown-item" href="#">Settings</a></li>
                               <li>
                                   <a class="dropdown-item" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                       <i class="mr-50" data-feather="power"></i> {{ __('Logout') }}
                                       <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                           @csrf
                                       </form>
                                   </a>
                               </li>
                           </ul>
                       </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin: 5rem">
    <div class="container-fluid">
        @yield('content')
    </div>
</main>
<!--Main layout-->

<!--Footer-->
<footer class="bg-light text-lg-start">

    <hr class="m-0" />

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        ?? {{date('Y')}} Copyright:
        <a class="text-dark" href="{{route('home')}}">
            <strong>{{config('app.name')}}</strong>
        </a>
    </div>
    <!-- Copyright -->
</footer>
<!--Footer-->
<!-- MDB -->
<script type="text/javascript" src="{{ asset('frontend/js/mdb.min.js') }}"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>
