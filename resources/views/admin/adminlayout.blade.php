<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('Assets/Images/favicon.ico') }}">
    <title> @yield('Title', 'EcoDynamix') </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('Assets/Css/Main.css') }}">
    <link rel="stylesheet" href="{{ asset('Assets/Css/adminstyle.css') }}">
</head>

<body class="mainColor">
    <nav class="top-navbar">

        <div class="d-flex align-items-center">

            <div class="brand">
                <span>Eco</span>DYNAMIX
            </div>

            <div class="portal-title">
                ADMIN PORTAL
            </div>

        </div>

        <div class="d-flex align-items-center gap-3">

            <a href="/" target="_blank" class="website-btn">
                <i class="bi bi-box-arrow-up-right me-2"></i>
                View Website
            </a>

            <div class="avatar">
                AD
            </div>

        </div>

    </nav>

    <!-- SIDEBAR + PAGE CONTENT -->

    <div class="dashboard-wrapper">

        <!-- SIDEBAR -->

        <aside class="sidebar">

            <div>

                <a href="{{ route('admin.dashboard') }}"
                    class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

                    <i class="bi bi-house-door"></i>
                    Overview

                </a>


                <a href="{{ route('admin.contacts.index') }}"
                    class="sidebar-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">

                    <i class="bi bi-envelope"></i>
                    Contact Inquiries

                </a>


            </div>


            <div class="sidebar-bottom">

                <a href="#" class="sidebar-link">

                    <i class="bi bi-gear"></i>
                    Settings

                </a>


                <form action="{{ route('logout') }}" method="POST">

                    @csrf

                    <button type="submit" class="sidebar-link border-0 bg-transparent w-100 text-start">

                        <i class="bi bi-box-arrow-right"></i>
                        Log Out

                    </button>

                </form>

            </div>

        </aside>

        {{-- Page content --}}
        <!-- DYNAMIC PAGE CONTENT -->

        <main class="main-content">

            @yield('content')

        </main>

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
        < script >
            document.getElementById('sidebarToggle').addEventListener('click', function() {
                document.getElementById('sidebar').classList.toggle('show');
            });
    </script>
    </script>
</body>

</html>
