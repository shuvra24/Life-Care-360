@extends('auth.layouts')

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100" style="background: url('https://via.placeholder.com/1500x900?text=Email+Verification+Background') no-repeat center center; background-size: cover;">
    <div class="row w-100">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0 fw-bold">Verify Your Email Address</h3>
                    <p class="small mt-2">Your health journey starts here.</p>
                </div>
                <div class="card-body p-4 text-center">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif

                    <p class="lead">Before proceeding, please check your email for a verification link.</p>
                    <p>If you didn’t receive the email, you can request another one below:</p>

                    <form method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary px-4 py-2 fw-bold">Resend Verification Email</button>
                    </form>

                    <div class="mt-4">
                        <p class="small">Need help? <a href="#" class="text-primary fw-bold">Contact Support</a></p>
                    </div>
                </div>
                <div class="card-footer text-center py-3 bg-light">
                    <p class="mb-0 small">Thank you for choosing Life Care 360!</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection