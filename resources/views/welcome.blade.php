@extends('auth.layouts')

@section('content')

<!-- Hero Section with Carousel -->
<section class="hero-section">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1609188076864-c35269136b09?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 h-40" alt="Healthcare Services">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-4 rounded">
                    <h1 class="display-4 fw-bold">Your Health, Our Priority</h1>
                    <p class="lead">Access world-class medical services, book appointments, and manage your health all in one place.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Get Started</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1597764690523-15bea4c581c9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 h-52" alt="Doctor Consultations">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-4 rounded">
                    <h1 class="display-4 fw-bold">Consult Top Doctors</h1>
                    <p class="lead">Book in-person or virtual consultations with experienced specialists.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Book Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1578307985189-6f84ae0cf2e0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDd8fGRvY3RvciUyMGltYWdlc3xlbnwwfHwwfHx8MA%3D%3D" class="d-block w-100 h-52" alt="Pharmacy and Lab Services">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-4 rounded">
                    <h1 class="display-4 fw-bold">Pharmacy & Lab Tests</h1>
                    <p class="lead">Order medicines online and book lab tests with fast results.</p>
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Explore Services</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- Key Features Section -->
<section class="features-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Why Choose Life Care 360?</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-0 shadow-sm">
                    <i class="fas fa-user-md fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Expert Doctors</h5>
                    <p>Consult with certified and experienced doctors across various specialties.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-0 shadow-sm">
                    <i class="fas fa-pills fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Online Pharmacy</h5>
                    <p>Order medicines online and get them delivered to your doorstep.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-0 shadow-sm">
                    <i class="fas fa-microscope fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Lab Tests</h5>
                    <p>Book lab tests and get accurate results delivered to your email.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-0 shadow-sm">
                    <i class="fas fa-ambulance fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Emergency Services</h5>
                    <p>Access emergency services and ambulance support 24/7.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-0 shadow-sm">
                    <i class="fas fa-heartbeat fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Health Monitoring</h5>
                    <p>Track your health vitals and get personalized recommendations.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 text-center p-4 border-0 shadow-sm">
                    <i class="fas fa-file-medical fa-3x text-primary mb-3"></i>
                    <h5 class="fw-bold">Medical Records</h5>
                    <p>Store and access your medical records securely online.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Doctors Section -->
<section class="doctors-section py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Meet Our Doctors</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="card text-center border-0 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto mt-4" alt="Doctor 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Dr. John Doe</h5>
                        <p class="card-text text-muted">Cardiologist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border-0 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto mt-4" alt="Doctor 2">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Dr. Jane Smith</h5>
                        <p class="card-text text-muted">Neurologist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border-0 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto mt-4" alt="Doctor 3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Dr. Mark Brown</h5>
                        <p class="card-text text-muted">Orthopedic</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-center border-0 shadow-sm">
                    <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto mt-4" alt="Doctor 4">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Dr. Emily White</h5>
                        <p class="card-text text-muted">Pediatrician</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">What Our Patients Say</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card p-4 border-0 shadow-sm">
                    <p class="card-text">"Life Care 360 has made managing my health so much easier. Highly recommended!"</p>
                    <h6 class="text-primary fw-bold">- Alice</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 border-0 shadow-sm">
                    <p class="card-text">"The doctors are very professional and caring. Great experience overall!"</p>
                    <h6 class="text-primary fw-bold">- Bob</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-4 border-0 shadow-sm">
                    <p class="card-text">"The pharmacy delivery service is fast and reliable. Thank you, Life Care 360!"</p>
                    <h6 class="text-primary fw-bold">- Charlie</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section py-5 bg-white">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Contact Us</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="https://plus.unsplash.com/premium_photo-1673953509975-576678fa6710?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3Dx" class="img-fluid rounded" alt="Contact Image">
            </div>
            <div class="col-md-6">
                <div class="card p-4 border-0 shadow-sm">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection