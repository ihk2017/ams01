@extends('admin.layouts.master')

@section('contents')
<div class="pagetitle">
    <h1>Employee Information</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Update Information</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
       <div class="col-lg-12">
            <div class="card">
                <div class="card-body bg-warning">
                    <h5 class="card-title">Update Employee Information</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                     <form action='{{ route('emp_update',$result->id) }}' method="post" enctype="multipart/form-data"
                     class="row g-3 needs-validation" novalidate>
                    {{-- <form action='#'  class="row g-3 needs-validation" novalidate> --}}
                        @csrf
                        {{-- <input type="hidden" name="id" value="{{ $result->id }}"> --}}
                        <div class="col-md-4 ">
                            <label for="validationTooltip01" class="form-label">Full Name</label>
                            <input type="text" value="{{ $result->empname }}" placeholder="Full Name" class="form-control" name ="empname" id="validationTooltip01"  >
                        </div>
                        <div class="col-md-4 ">
                             <label for="validationTooltip02" class="form-label">Address</label>
                             <input type="text" value="{{ $result->address }}" placeholder="Address" class="form-control" name ="address" id="validationTooltip02"  >
                        </div>
                        <div class="col-md-4 ">
                            <label for="validationTooltip03" class="form-label">Contact NO</label>
                            <input type="number" value="{{ $result->contactno }}" placeholder="Contat No" class="form-control" name ="contactno" id="validationTooltip03"  >
                        </div>
                        <div class="col-md-6 ">
                            <label for="validationTooltip04" class="form-label">Designation</label>
                            <input type="text" value="{{ $result->designation }}" placeholder="Permanent's Name" class="form-control"
                            name ="designation" id="validationTooltip04"  >
                        </div>
                        <div class="col-md-6 ">
                            <label for="validationTooltip05" class="form-label">Picture</label>
                            <img style="width: 10px%; height:60px" src="{{ asset('images/myimages/'.$result->empimg) }} " alt="">
                            <input type="file"  placeholder="Present Address" class="form-control" name ="empimg" id="validationTooltip05"  >
                        </div>
                        {{-- //<img style="width: 60%; height:40px"  src="{{ asset('images/myimages/'.$result->empimg) }} " alt=""> --}}
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            <a  href="{{ route('all_emp') }}"><span class="btn btn-primary">Go To List</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
