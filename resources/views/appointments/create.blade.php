<!-- resources/views/appointments/create.blade.php -->

@extends('auth.layouts')

@section('content')

<div class="container py-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Menu</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="{{ route('dashboard') }}" class="text-decoration-none">Dashboard</a></li>
                        <li class="list-group-item"><a href="{{ route('appointments') }}" class="text-decoration-none">Appointments</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Prescriptions</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Medical Records</a></li>
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Settings</a></li>
                        <li class="list-group-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-link text-decoration-none p-0">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-md-9">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Book New Appointment</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('appointments.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="doctor_id" class="form-label">Select Doctor</label>
                            <select class="form-select" id="doctor_id" name="doctor_id" required>
                                <option value="">Choose a doctor</option>
                                @foreach ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }} ({{ $doctor->specialty ?? 'General' }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input type="time" class="form-control" id="time" name="time" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Appointment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection