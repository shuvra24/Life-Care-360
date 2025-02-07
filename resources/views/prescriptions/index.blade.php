<!-- resources/views/prescriptions/index.blade.php -->

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
                    <h5 class="mb-0">My Prescriptions</h5>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Doctor</th>
                                    <th>Medicines</th>
                                    <th>Instructions</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prescriptions as $prescription)
                                    <tr>
                                        <td>{{ $prescription->doctor->name }}</td>
                                        <td>{{ $prescription->medicines }}</td>
                                        <td>{{ $prescription->instructions ?? 'N/A' }}</td>
                                        <td>{{ $prescription->created_at->format('Y-m-d') }}</td>
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