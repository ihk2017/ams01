@extends('admin.layouts.master')

@section('contents')
<div class="pagetitle">
    <h1>Product Item Type</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Item Type </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            <div class="card c-shadow">
                <div class="card-body ">
                    <h5 class="card-title">Update Item Type</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action='{{ route('itemType_update',$result->id) }}' method="post" enctype="multipart/form-data"
                        class="row g-3 needs-validation" novalidate>
                        @csrf

                        <input type="hidden" name="id" value="{{ $result->id }}">
                        <div class="col-md-5">
                            <label for="validationCustom05" class="form-label">Category Name</label>
                            <select class="form-select bg-secondary text-light" name="category_id" id="validationCustom05" required>
                                <option selected disabled value="">Choose...</option>
                                @foreach ($categories as $item)
                                    <option {{ $result->category_id == $item->id?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="validationTooltip01" class="form-label">Item Type Name</label>
                            <input type="text" value="{{ $result->name }}" class="form-control" name ="name" id="validationTooltip01"  >
                        </div>

                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">Status</label>
                            <select class="form-select" name="status" id="validationCustom04" required>
                                <option selected disabled value="">Choose...</option>
                                <option {{ $result->status == 'Active'?'selected':'' }} value="Active">Active</option>
                                <option {{ $result->status == 'InActive'?'selected':'' }} class="inact" value="InActive">InActive</option>
                            </select>
                        </div>

                        <div class="col-12 mt-3 mb-3">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <a  href="{{ route('itemtype_list') }}"><span class="btn btn-primary">Go To List</span></a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
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
