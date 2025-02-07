@extends('auth.layouts')

@section('title', 'Your Profile')

@section('content')
<div class="container">
    <h2>Your Profile</h2>
    <div class="card">
        <div class="card-body text-center">
            <!-- Profile Image -->
            <img src="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('default-profile.png') }}" 
                 class="rounded-circle mb-3" 
                 alt="Profile Image" 
                 width="150" height="150">

            <h4>Name: {{ Auth::user()->name }}</h4>
            <h4>Email: {{ Auth::user()->email }}</h4>

            @if (Auth::user()->role == 'doctor' && Auth::user()->doctor)
                <h4>Specialization: {{ Auth::user()->doctor->specialization }}</h4>
                <h4>Experience: {{ Auth::user()->doctor->experience }} years</h4>
                <h4>Certifications: {{ Auth::user()->doctor->certifications }}</h4>
            @elseif (Auth::user()->role == 'patient' && Auth::user()->patient)
                <h4>Medical History: {{ Auth::user()->patient->medical_history }}</h4>
                <h4>Allergies: {{ Auth::user()->patient->allergies }}</h4>
                <h4>Emergency Contact: {{ Auth::user()->patient->emergency_contact }}</h4>
            @endif

            <a href="{{ route('profile.edit') }}" class="btn btn-primary mt-3">Edit Profile</a>
        </div>
    </div>
</div>
@endsection
