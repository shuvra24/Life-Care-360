@extends('auth.layouts')

@section('title', 'Edit Profile')

@section('content')
<div class="container">
    <h2>Edit Your Profile</h2>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST') <!-- Allow POST for Laravel handling -->

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', Auth::user()->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', Auth::user()->email) }}" required>
                </div>

                <div class="form-group">
                    <label for="profile_picture">Profile Picture</label>
                    <input type="file" name="profile_picture" class="form-control">
                </div>

                <button type="submit" class="btn btn-success mt-3">Update Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection
