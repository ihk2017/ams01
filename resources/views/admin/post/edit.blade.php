@extends('admin.layouts.master')

@section('contents')
<div class="pagetitle">
    <h1>Post</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Edit Post</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
       <div class="col-lg-10">
            <div class="card c-shadow">
                <div class="card-body ">
                    <h5 class="card-title">Edit Post</h5>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action='{{ route('post_update') }}' method="post" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>

                        @csrf
                        <input type="hidden" name="id" value="{{ $result->id }}">



                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Post Title</label>
                            <input type="text" value="{{ $result->title }}" placeholder="Post Title" class="form-control" name="title" id="validationCustom01" required>
                        </div>



                        <div class="col-md-6">
                        <label for="validationCustom05" class="form-label">Category Name</label>
                        <select class="form-select" name="category_id" id="validationCustom05" required>
                            <option selected disabled value="">Choose...</option>
                            @foreach ($categories as $item)
                                <option {{ $result->category_id == $item->id?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        </div>


                        <div class="col-md-12">
                        <label for="validationCustom06" class="form-label">Short Description</label>
                        <textarea name="short_description" required class="form-control" id="validationCustom06" cols="5" rows="5">{{ $result->short_description }}</textarea>
                        </div>

                        <div class="col-md-12">
                        <label for="validationCustom04" class="form-label"> Description</label>
                        <textarea name="description" required class="form-control ckeditor" id="" cols="20" rows="10">{!! $result->description !!}</textarea>
                        </div>

                        <div class="col-md-12">
                        <label for="photo" class="form-label">Old Photo</label>
                        <img width="320" height="220" src="{{ asset('uploads/products').'/'.$result->photo }}" alt="">
                        </div>

                        <div class="col-md-4">
                        <label for="validationCustom09" class="form-label">Photo</label>
                        <input type="hidden" name="old_photo" value="{{ $result->photo }}">
                        <input type="file" name="photo" class="form-control">
                        </div>

                        <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Status</label>
                        <select class="form-select" name="status" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option {{ $result->status == 'Active'?'selected':'' }} value="Active">Active</option>
                            <option {{ $result->status == 'InActive'?'selected':'' }} value="InActive">InActive</option>
                        </select>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-success" type="submit">Confirm</button>
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

