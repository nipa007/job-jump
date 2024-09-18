


@extends('backend.layouts.main')
@section('title', 'Profile settings')

@section('content')
    <div class="container">

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('logout'))
    <div class="alert alert-danger">
        {{ session('logout') }}
    </div>
    @endif

<div class="card">
    <div class="card-header">
        <h5 class="text-center">My Account</h5>
    </div>
        <div class="card-body">
            <form action="{{ route('account.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="input-group-sm col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control text-primary" id="first_name" name="first_name" value="{{ Auth::user()->first_name }}">

                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control text-primary" id="last_name" name="last_name" value="{{ Auth::user()->last_name }}">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control text-primary" id="email" name="email" value="{{ Auth::user()->email }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control text-primary" id="phone" name="phone" value="{{ Auth::user()->phone }}">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="current_password">Current Password</label>
                        <input type="password" class="form-control text-primary" id="current_password" name="current_password">
                    </div>


                        <div class="input-group-sm col-md-6">
                            <label for="new_password">New Password</label>
                            <input type="password" class="form-control text-primary" id="new_password" name="new_password">
                        </div>

                        <div class="input-group-sm col-md-6">
                            <label for="profile_pic">Profile Picture</label>
                            <input type="file" class="form-control text-primary" id="profile_pic" name="profile_pic" placeholder="Choose...">
                        </div>


                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary mt-6">Update</button>

                </div>

            </form>
        </div>
</div>
    </div>
@endsection

