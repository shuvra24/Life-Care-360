@extends('auth.layouts')

@section('content')

<div class="hero-section text-center py-5" style="background: url('https://via.placeholder.com/1500x600?text=Life+Care+360') no-repeat center center; background-size: cover; color: white;">
    <h1 class="display-4">Welcome to Life Care 360</h1>
    <p class="lead">Your one-stop solution for all your healthcare needs</p>
    @guest
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg mt-3">Get Started</a>
        <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg mt-3">Login</a>
    @endguest
</div>

<div class="container mt-5">
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <i class="bi bi-calendar-check display-4 text-primary"></i>
                    <h5 class="mt-3">Book Appointments</h5>
                    <p>Schedule appointments with top specialists in just a few clicks.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <i class="bi bi-cart-plus display-4 text-primary"></i>
                    <h5 class="mt-3">Order Medicines</h5>
                    <p>Get your medicines delivered right to your doorstep.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <i class="bi bi-camera-video display-4 text-primary"></i>
                    <h5 class="mt-3">Teleconsultation</h5>
                    <p>Consult with doctors online via video or chat.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@auth
<div class="container mt-5">
    <div class="alert alert-info text-center">
        <h4>Welcome back, {{ Auth::user()->name }}!</h4>
        <p>Here’s a quick overview of your account:</p>
        <ul class="list-unstyled">
            <li><strong>Upcoming Appointments:</strong> 3</li>
            <li><strong>Pending Lab Results:</strong> 2</li>
        </ul>
        <a href="#" class="btn btn-primary">Go to Dashboard</a>
    </div>
</div>
@endauth

@endsection