@extends('backend.layouts.main')
@section('title', 'CV Create')
@section('content')

<div class="container">
<div class="card">
    <div class="card-header">
        <h5 class="text-center">Education Information</h5>
       <x-alert-message/>
    </div>
        <div class="card-body">
            <form action="{{ route('education.store') }}" method="POST">
                @csrf
                <div class="row g-3">

                    <div class="input-group-sm col-md-6">
                        <label for="level">Level of Education</label>
                        <select class="form-select" name="level">
                            <option value="" selected disabled>--Select--</option>
                            <option value="Master">Master</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Diploma">Diploma</option>
                            <option value="Higher Secondary">Degree</option>
                            <option value="Secondary">Primary School</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="degree_name">Degree Name</label>
                        <select class="form-select" name="degree_name">
                        <option value="" selected disabled>--Select--</option>
                        <option value="Master of Science">Master of Science</option>
                        <option value="Bachelor of Science">Bachelor of Science</option>
                        <option value="Diploma in Engineering">Diploma in Engineering</option>
                        <option value="HSC">HSC</option>
                        <option value="SSC">SSC</option>
                        <option value="Others">Others</option>
                        </select>

                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="group">Group</label>
                        <input type="text" class="form-control" id="group" name="group">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="institution">Institution</label>
                        <input type="text" class="form-control" id="institution" name="institution">
                    </div>


                    <div class="input-group-sm col-md-4">
                        <label for="result">Result</label>
                        <input type="text" class="form-control" id="result" name="result">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="scale">Scale</label>
                        <select class="form-select" name="scale">
                            <option value="" selected disabled>--Select--</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>


                    <div class="input-group-sm col-md-4">
                        <label for="start_date">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="end_date">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" id="duration" name="duration">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="year_of_passing">Year of Passing</label>
                        <input type="text" class="form-control" id="year_of_passing" name="year_of_passing">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country">
                    </div>

                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary mt-6">Add Education Info</button>

                </div>

            </form>
        </div>
</div>
</div>

    @endsection
