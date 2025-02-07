@extends('auth.layouts')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0 fw-bold">Reset Your Password</h3>
                </div>
                <div class="card-body p-4">
                    @if (session('success'))
                        <div class="alert alert-success text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('password.email') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" name="email" placeholder="Enter your email" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary w-100 fw-bold">Send Password Reset Link</button>
                    </form>
                </div>
                <div class="card-footer text-center py-3 bg-light">
                    <a href="{{ route('login') }}" class="text-primary fw-bold">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
