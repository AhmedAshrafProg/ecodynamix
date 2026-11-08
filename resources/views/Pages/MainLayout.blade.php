<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('Title', 'EcoDynamix') </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('Assets/Images/favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('Assets/Css/Main.css') }}">
</head>

<body class="mainColor">
    <header>
        <nav class="navbar md:navbar-expand mainColor !important">
            <div class="container d-flex align-items-center w-100">
                <a class="navbar-brand" href={{ route('home') }}> <img class="w-12"
                        src="{{ asset('Assets/Images/aside.jpg') }}" /> </a>
                <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer"
                    data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon" aria-hidden="true"></span>
                </button>
                <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                    <div class="drawer-header">
                        <h5 class="drawer-title" id="navbarDrawerLabel"> <i class="fa-solid fa-house"></i> Home</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                    </div>
                    <div class="d-flex">
                        <div class="drawer-body mb-2 md:mb-0">
                            <ul class="nav navbar-nav me-auto">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href={{ route('home') }}> <i
                                            class="fa-solid fa-house"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href={{ route('about') }}> <i
                                            class="fa-solid fa-circle-user"></i> About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href={{ route('serivces') }}> <i class="fa-solid fa-globe"></i>
                                        Our
                                        Services</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contacts.create') }}"> <i
                                            class="fa-solid fa-envelope"></i> Contact Us
                                    </a>
                                </li>

                            </ul>

                        </div>
                        <div class="container width300">
                            <ul class="nav navbar-nav d-flex flex-row align-items-center">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contacts.create') }}"> <button
                                            class="btn-solid bgGreen white-text"><i class="fa-solid fa-envelope"></i>
                                            Contact Us
                                        </button> </a>
                                </li>
                                <li class="nav-item  h-50 d-flex align-self-center"> <a href="{{ route('register') }}">
                                        <button class="btn-solid bgGreen white-text">Signup
                                        </button> </a></li>
                                <li class="nav-item position-relative h-50 d-flex align-self-center">

                                    <button class="bgGreen white-text login-role-toggle btn-solid" id="loginRoleMenu"
                                        data-bs-toggle="menu" aria-expanded="false">
                                        Log In
                                    </button>

                                    <div class="menu" aria-labelledby="loginRoleMenu">
                                        <a class="menu-item" href="{{ route('login') }}">
                                            User Login
                                        </a>

                                        <a class="menu-item" href="{{ route('admin.login') }}">
                                            Admin Login
                                        </a>
                                    </div>

                                </li>

                            </ul>
                        </div>
                    </div>
                </dialog>
            </div>
        </nav>
    </header>

    <main class="maintextcolor">
        @yield('content')
    </main>

    <div class="pt-8 maintextcolor">
        <div class="afooter text-center">
            <h2><span class="fg-white">Let's Discuss</span><span class="greencolor"> Your Needs</span></h2>
            <p class="fg-white my-0 mt-4">Get in touch to explore how we can support your organizational </p>
            <p class="fg-white my-0 mb-4"> and sustainability goals </p>
            <a class="nav-link" href="#">
                <div class="mx-auto">
                    <button class="btn-solid white-text bgGreen fs-xl d-flex align-items-center"><i
                            class="fa-solid fa-envelope"></i>
                        Contact Us
                        <i class="fa-solid fa-arrow-right-long"></i>
                    </button>

                </div>
            </a>
        </div>
        <footer>
            <div class="d-flex justify-content-around align-items-end my-4">
                <div>
                    <img class="w-12" src="{{ asset('Assets/Images/aside.jpg') }}" />
                </div>
                <div>
                    <p><a href="mailto:info@ecodynamix.net" class="text-decoration-none"><i
                                class="fa-solid fa-envelope"></i> info@ecodynamix.net </a></p>
                </div>
                <div>
                    <p><i class="fa-regular fa-copyright"></i> 2026 EcoDynamix All rights reserved</p>
                </div>
            </div>
        </footer>
    </div>
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
