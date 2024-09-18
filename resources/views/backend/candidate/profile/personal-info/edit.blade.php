@extends('backend.layouts.main')
@section('title', 'CV Create')
@section('content')

<div class="container">
<div class="card">
    <div class="card-header">
        <h5 class="text-center">Update Personal Information</h5>
       <x-alert-message/>
    </div>
        <div class="card-body">
            <form action="{{ route('personal.info.update', $personalInfo->user_id) }}" method="POST">
                @csrf
                <div class="row g-3">

                    <div class="input-group-sm col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $personalInfo->first_name }}">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $personalInfo->last_name }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="father_name">Father Name</label>
                        <input type="text" class="form-control" id="father_name" name="father_name" value="{{ $personalInfo->father_name }}">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="mother_name">Mother Name</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name" value="{{ $personalInfo->mother_name }}">
                    </div>


                    <div class="input-group-sm col-md-4">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $personalInfo->date_of_birth }}">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="gender">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="" selected disabled>--Select--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="marital_status">Marital Status</label>
                        <select class="form-select" name="marital_status">
                            <option value="" selected disabled>--Select--</option>
                            <option value="Unmarried">Unmarried</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>


                    <div class="input-group-sm col-md-4">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality" value="{{ $personalInfo->nationality }}">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="national_id">National ID No.</label>
                        <input type="text" class="form-control" id="national_id" name="national_id" value="{{ $personalInfo->national_id }}">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="religion">Religion</label>
                        <select class="form-select" name="religion">
                            <option value="" selected disabled>--Select--</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Christian">Christian</option>
                            <option value="Buddhist">Buddhist</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="contact_phone">Contact Number</label>
                        <input type="text" class="form-control" id="contact_phone" name="contact_phone" value="{{ $personalInfo->contact_phone }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="contact_email">Email</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ $personalInfo->contact_email }}">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="present_address">Present Address</label>
                        <input type="text" class="form-control" id="present_address" name="present_address" value="{{ $personalInfo->present_address }}">
                    </div>



                    <div class="input-group-sm col-md-6">
                        <label for="permanent_address">Permanent Address</label>
                        <input type="text" class="form-control" id="permanent_address" name="permanent_address" value="{{ $personalInfo->permanent_address }}">
                    </div>

                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary mt-6">Update Personal Info</button>

                </div>

            </form>
        </div>
</div>
</div>

    @endsection
