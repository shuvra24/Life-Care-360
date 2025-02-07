@extends('auth.layouts')

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100" style="background: url('https://via.placeholder.com/1500x900?text=Medical+Registration+Background') no-repeat center center; background-size: cover;">
    <div class="row w-100">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0 fw-bold">Welcome to Life Care 360</h3>
                    <p class="small mt-2">Your gateway to comprehensive healthcare solutions.</p>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Full Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter your full name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="{{ route('login') }}" class="text-decoration-none text-primary fw-bold">Already have an account? Login here</a>
                            <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">Register</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3 bg-light">
                    <p class="mb-0 small">By registering, you agree to our <a href="#" class="text-primary fw-bold">Terms & Conditions</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection