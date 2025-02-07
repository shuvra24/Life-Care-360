@extends('auth.layouts')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row w-100">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0 fw-bold">Set a New Password</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('password.update') }}" method="post">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        
                        <div class="mb-3">
                            <label for="email" class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">New Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold">Reset Password</button>
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
