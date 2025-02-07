<!-- resources/views/prescriptions/create.blade.php -->

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
                        <li class="list-group-item"><a href="{{ route('prescriptions.index') }}" class="text-decoration-none">Prescriptions</a></li>
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
                    <h5 class="mb-0">Create New Prescription</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('prescriptions.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="patient_id" class="form-label">Select Patient</label>
                            <select class="form-select" id="patient_id" name="patient_id" required>
                                <option value="">Choose a patient</option>
                                @foreach ($patients as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="medicines" class="form-label">Medicines</label>
                            <textarea class="form-control" id="medicines" name="medicines" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="instructions" class="form-label">Instructions</label>
                            <textarea class="form-control" id="instructions" name="instructions" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Prescription</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection