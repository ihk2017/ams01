@extends('admin.layouts.master')

@section('contents')
<div class="pagetitle">
    <h1>Archive</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Image Gallery</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
       <div class="col-lg-12">
            <div class="card">
                <div class="card-body bg-secondary">
                    <h5 class="card-title">Upload Image</h5>
                    {{-- action='{{ route('img_store') }}' method="post" --}}
                        <form action='{{ route('archive_store') }}' method="post" enctype="multipart/form-data"  class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-md-4 ">
                            <label for="validationTooltip01" class="form-label">Image Category</label>
                            <input type="text" class="form-control" name ="category" id="validationTooltip01"  required>
                        </div>

                        <div class="col-md-6 ">
                            <label for="validationTooltip05" class="form-label">Upload Image</label>
                            <input type="file" placeholder="Present Address" class="form-control" name ="empimg" id="validationTooltip05"  >
                        </div>



                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            <a  href="{{ route('personal_list') }}"><span class="btn btn-primary">Go To List</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
