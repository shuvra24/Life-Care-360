<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Life Care 360</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            padding-top: 70px; /* Prevents overlap with the fixed navbar */
        }
        .navbar {
        background-color: #007bff;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
         }
        .navbar-brand, .nav-link {
            color: white !important;
        }
        .footer {
            background-color: #007bff;
            color: white;
            padding: 10px 0;
            text-align: center;
            position: fixed; /*position: relative;*/
            bottom: 0;
            width: 100%;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .card {
            border-radius: 15px;
            overflow: hidden;
        }
        .card-header {
            background-color: #007bff;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ URL('/') }}">Life Care 360</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('physician') }}">Physician</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blood') }}">Blood</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('test') }}">Test</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                        </li>
                    @else
                        <div class="dropdown">
                            <!-- <img src="{{ Auth::user()->profile_picture }}" alt="Profile" class="profile-img dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false"> -->

                            <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('default-profile.png') }}" 
                            alt="Profile" class="profile-img dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">

                            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.show') }}">View Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('medical.record') }}">Medical Record</a></li>
                                <li><a class="dropdown-item" href="{{ route('announcement') }}">Announcement</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                       Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <div class="footer">
        <p>&copy; {{ date('Y') }} Life Care 360. All rights reserved.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>