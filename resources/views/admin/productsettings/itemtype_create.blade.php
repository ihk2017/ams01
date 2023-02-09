@extends('admin.layouts.master')

@section('contents')
<div class="pagetitle">
    <h1>Product Item Type</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Item Type</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

        <div class="col-lg-1">
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body c-shadow">
                    <h5 class="card-title">Create Item Type</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action='{{ route('im_store') }}' method="post" enctype="multipart/form-data"
                        class="row g-3 needs-validation" novalidate>


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
                            <div class="col-md-4">
                                <label for="validationTooltip01" class="form-label">Item Type Name</label>
                                <input type="text" placeholder="Item Type Name" class="form-control" name ="name" id="validationTooltip01"  >
                            </div>
                            <div class="col-md-3">
                                <label for="validationTooltip04" class="form-label">Status</label>
                                <select class="form-select" name="status" id="validationTooltip04" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
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
