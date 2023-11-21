@extends('layouts.app')

@section('content')

<div class="formjob flex-row">
    <div class="row mx-0 justify-content-center">
        <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 w-50 px-xxl-3">
            <form method="POST" class="rounded-1 p-3 border bg-white" action="{{route('Jobform-store')}}" enctype="multipart/form-data">
                @csrf
                <h1 class="text-center fw-bolder mb-4">Fill To Apply Job</h1>
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label class="">Name</label>
                        <input type="text" placeholder="Enter Your Name" id="name" name="name" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="">E-Mail</label>
                        <input type="email" placeholder="Enter Your E-Mail" name="email" id="email" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="">CNIC</label>
                        <input type="cnic" placeholder="Enter Your CNIC" name="cnic" id="cnic" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Date of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label for="">Job Title</label>
                        <input type="text" placeholder="Enter Your Job Title" name="jobtitle" id="jobtitle" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label for="">Gender</label>
                        <select required name="gender" id="gender" class="form-select">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label class="">Phone Number</label>
                        <input type="mobile" placeholder="Enter Your Number" id="number" name="number" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="">Address</label>
                        <input type="address" placeholder="Enter Your Address" name="address" id="address" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label class="">Qualification</label>
                        <input type="qualification" placeholder="Enter Your Qualification" id="qualification" name="qualification" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="">University</label>
                        <input type="university" placeholder="Enter Your University" name="university" id="university" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label class="">CGPA</label>
                        <input type="cgpa" placeholder="Enter Your CGPA" id="cgpa" name="cgpa" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="">Year Of Completion</label>
                        <input type="text" placeholder="Enter Year Of Completion" name="completion" id="completion" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label class="">Experience</label>
                        <input type="experience" placeholder="Enter Your Experience" id="experience" name="experience" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class="">Salary</label>
                        <input type="salary" placeholder="Enter Your Salary" name="salary" id="salary" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <label class="">Currently Working</label>
                        <input type="working" placeholder="Enter Currently Working" id="working" name="working" class="form-control">
                    </div>
                    <div class="col-12 col-md-6">
                        <label class=""> Your CV</label>
                        <input required name="file" id="file" type="file" class="form-control" />
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary px-3 rounded-3">
                        Apply
                    </button>
                </div>

                <div class="d-block text-end">
                    <div class="small">
                        By
                        <a href="https://herotofu.com" class="text-dark text-decoration-none" target="_blank">Talha Yasir</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
