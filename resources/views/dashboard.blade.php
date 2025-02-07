<!-- resources/views/dashboard.blade.php -->

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
                        <li class="list-group-item"><a href="#" class="text-decoration-none">Appointments</a></li>
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
                    <h5 class="mb-0">Welcome, {{ $user->name }}</h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Upcoming Appointments</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Doctor</th>
                                    <th>Specialty</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment['date'] }}</td>
                                        <td>{{ $appointment['doctor'] }}</td>
                                        <td>{{ $appointment['specialty'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <h5 class="card-title mt-4">Recent Prescriptions</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Medicine</th>
                                    <th>Dosage</th>
                                    <th>Instructions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prescriptions as $prescription)
                                    <tr>
                                        <td>{{ $prescription['medicine'] }}</td>
                                        <td>{{ $prescription['dosage'] }}</td>
                                        <td>{{ $prescription['instructions'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection