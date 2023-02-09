
@extends('admin.layouts.master')

@section('contents')
<div class="pagetitle">
    <h1>Post</h1>
    <nav >
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Create Post</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
       <div class="col-lg-12">
            <div class="card c-shadow">
                <div class="card-body ">
                    <h5 class="card-title">Create Post</h5>

                        <form action='{{ route('post_store') }}' method="post"  enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-md-5">
                            <label for="validationTooltip05" class="form-label">Category Name</label>
                            <select class="form-select" name="category_id" id="validationTooltip05" required>
                                <option selected disabled value="">Choose Category</option>
                                @foreach ($categories as $result)
                                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-7 ">
                            <label for="validationTooltip01" class="form-label">Post Title</label>
                            <input type="text" placeholder="Post Title" class="form-control" name ="title" id="validationTooltip01"  required>
                        </div>


                        <div class="col-md-12">
                            <label for="validationCustom06" class="form-label">Short Description</label>
                            <textarea name="short_description" required class="form-control" id="validationCustom06" ></textarea>
                          </div>

                          <div class="col-md-12">
                            <label for="validationCustom04" class="form-label"> Description</label>
                            <textarea name="description" required class="form-control  ckeditor " id="" cols="20" rows="5"></textarea>
                          </div>

                          <div class="col-md-6">
                            <label for="validationCustom09" class="form-label">Photo</label>
                           <input type="file" name="photo" class="form-control">
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
                            <button class="btn btn-primary" type="submit">Confirm</button>
                            <a  href="{{ route('all_post') }}"><span class="btn btn-primary">Go To List</span></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </section>

  @push('script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('.summernote').summernote({
        height: 200
    });
    });
    </script>
  @endpush



  <script type="text/javascript">
      $(document).ready(function () {
          $('.ckeditor').ckeditor();
      });
  </script>

@endsection
