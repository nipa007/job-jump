@extends('layouts.backend.app')
@section('title', 'Profile View')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="text-center">View Profile</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered ">

            <tr>
                <h5>Career Objectives</h5>
                <hr>
                {{-- <p>{{ $profile->career_objective }}</p> --}}
            </tr>


                <thead>
                    <tr>
                        <h5 colspan="2">Personal Information</h5>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td>{{ $profile->first_name }}</td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{ $profile->last_name }}</td>
                    </tr>

                    <tr>
                        <th>Father Name</th>
                        <td>{{ $profile->father_name }}</td>
                    </tr>

                    <tr>
                        <th>Mother Name</th>
                        <td>{{ $profile->mother_name }}</td>
                    </tr>

                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $profile->date_of_birth }}</td>
                    </tr>

                    <tr>
                        <th>Gender</th>
                        <td>{{ $profile->gender }}</td>
                    </tr>

                    <tr>
                        <th>Marital Status</th>
                        <td>{{ $profile->marital_status }}</td>
                    </tr>

                    <tr>
                        <th>Nationality</th>
                        <td>{{ $profile->nationality }}</td>
                    </tr>

                    <tr>
                        <th>National ID</th>
                        <td>{{ $profile->national_id }}</td>
                    </tr>

                    <tr>
                        <th>Religion</th>
                        <td>{{ $profile->religion }}</td>
                    </tr>

                    <tr>
                        <th>Contact Number</th>
                        <td>{{ $profile->contact_phone }}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{ $profile->contact_email }}</td>
                    </tr>

                    <tr>
                        <th>Present Address</th>
                        <td>{{ $profile->present_address }}</td>
                    </tr>

                    <tr>
                        <th>Permanent Address</th>
                        <td>{{ $profile->permanent_address }}</td>
                    </tr>

                    <tr>
                        <th>Present Salary</th>
                        <td>{{ $profile->present_salary }}</td>
                    </tr>

                    <tr>
                        <th>Expected Salary</th>
                        <td>{{ $profile->expected_salary }}</td>
                    </tr>


                </thead>
            </table>
        </div>
    </div>
</div>

    @endsection
