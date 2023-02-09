@extends('admin.layouts.master')

@section('contents')
<div class="pagetitle">
    <h1>Personal Information</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Personal Informationy</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
       <div class="col-lg-12">
            <div class="card">
                <div class="card-body bg-secondary">
                    <h5 class="card-title">Entry Personal Information</h5>

                        <form action='{{ route('bio_store') }}' method="post" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-md-4 ">
                            <label for="validationTooltip01" class="form-label">Full Name</label>
                            <input type="text" placeholder="Full Name" class="form-control" name ="fullname" id="validationTooltip01"  required>
                        </div>
                        <div class="col-md-4 ">
                             <label for="validationTooltip02" class="form-label">Father's Name</label>
                             <input type="text" placeholder="Father's Name" class="form-control" name ="fathername" id="validationTooltip02"  required>
                        </div>
                        <div class="col-md-4 ">
                            <label for="validationTooltip03" class="form-label">Mother's Name</label>
                            <input type="text" placeholder="Mother's Name" class="form-control" name ="mothername" id="validationTooltip03"  required>
                        </div>
                        <div class="col-md-6 ">
                            <label for="validationTooltip04" class="form-label">Permanent Address</label>
                            <input type="text" placeholder="Permanent's Name" class="form-control"
                            name ="permanentaddress" id="validationTooltip04"  required>
                        </div>
                        <div class="col-md-6 ">
                            <label for="validationTooltip05" class="form-label">Present Address</label>
                            <input type="text" placeholder="Present Address" class="form-control" name ="presentaddress" id="validationTooltip05"  required>
                        </div>
                        {{-- religion --}}
                        <div class="col-md-4 ">
                            <label for="validationTooltip06" class="form-label">Religion</label>
                            <input type="text" placeholder="Religion" class="form-control" name ="religion" id="validationTooltip06"  required>
                        </div>
                        <div class="col-md-4 ">
                            <label for="validationTooltip07" class="form-label">Date of Birth</label>
                            <input type="date" placeholder="Date of birth" class="form-control" name ="dateofbirth" id="validationTooltip07"  required>
                        </div>
                        <div class="col-md-4 ">
                            <label for="validationTooltip08" class="form-label">Gender</label>
                            <input type="text" placeholder="Gender" class="form-control" name ="gender" id="validationTooltip08"  required>
                        </div>
                        <div class="col-md-6 ">
                            <label for="validationTooltip09" class="form-label">Higher Education</label>
                            <input type="text" placeholder="Higher Education" class="form-control" name ="topeducation" id="validationTooltip09"  required>
                        </div>
                        <div class="col-md-6 ">
                            <label for="validationTooltip010" class="form-label">Hobby</label>
                            <input type="text" placeholder="Hobby" class="form-control" name ="hpbby" id="validationTooltip010"  required>
                        </div>


                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            <a  href="{{ route('all_bio') }}"><span class="btn btn-primary">Go To List</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
