@extends('admin.layouts.master')

@section('contents')
<div class="pagetitle">
    <h1>Category</h1>
    <nav >
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Create Category</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
       <div class="col-lg-8">
            <div class="card c-shadow">
                <div class="card-body">
                    <h5 class="card-title">Create Caregory</h5>
                    <form action='{{ route('category_store') }}' method="post" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-md-7 ">
                            <label for="validationTooltip01" class="form-label">Category Name</label>
                            <input type="text" placeholder="category name" class="form-control" name ="category" id="validationTooltip01"  required>
                        </div>
                        <div class="col-md-5">
                            <label for="validationTooltip04" class="form-label">Status</label>
                            <select class="form-select" name="status" id="validationTooltip04" required>
                            <option selected disabled value="">Choose...</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection
