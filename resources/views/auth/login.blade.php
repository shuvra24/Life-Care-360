@extends('auth.layouts')

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100" style="background: url('https://via.placeholder.com/1500x900?text=Medical+Login+Background') no-repeat center center; background-size: cover;">
    <div class="row w-100">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0 fw-bold">Welcome Back to Life Care 360</h3>
                    <p class="small mt-2">Your health, our priority.</p>
                </div>
                <div class="card-body p-4">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success text-center">
                            {{ $message }}
                        </div>
                    @endif

                    <form action="{{ route('authenticate') }}" method="post">
                        @csrf
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
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="#" class="text-decoration-none text-primary fw-bold">Forgot Password?</a>
                            <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">Login</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3 bg-light">
                    <p class="mb-0 small">Don't have an account? <a href="{{ route('register') }}" class="text-primary fw-bold">Register here</a>.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection