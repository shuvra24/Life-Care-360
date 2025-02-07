<!-- resources/views/appointments/index.blade.php -->

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
                    <h5 class="mb-0">My Appointments</h5>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <a href="{{ route('appointments.create') }}" class="btn btn-primary mb-3">Book New Appointment</a>

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Doctor</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($appointments as $appointment)
                                    <tr>
                                        <td>{{ $appointment->date }}</td>
                                        <td>{{ $appointment->time }}</td>
                                        <td>{{ $appointment->doctor->name }} ({{ $appointment->doctor->specialty ?? 'General' }})</td>
                                        <td>{{ $appointment->status }}</td>
                                        <td>
                                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                                            </form>
                                        </td>
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