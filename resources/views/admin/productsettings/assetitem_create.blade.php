@extends('admin.layouts.master')

@section('contents')
<div class="pagetitle">
    <h1>Product Item</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Item </li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">

        <div class="col-lg-2">
        </div>
        <div class="col-lg-12">
            <div class="card c-shadow">
                <div class="card-body ">
                    <h5 class="card-title">Create Item</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action='{{ route('item_store') }}' method="post" enctype="multipart/form-data"
                     class="row g-3 needs-validation" novalidate>
                        @csrf

                        <div class="col-md-8">
                            <label for="validationTooltip05" class="form-label">Model SKU (Category/item type/ Item Model NO)</label>
                            <select class="form-select bg-light" name="itemmodel_id" id="validationTooltip05" required>
                                <option selected disabled value="">Choose Model SKU Name</option>
                                @foreach ($reqult_d as $result)
                                    <option value="{{ $result->itemmodelid }}">{{ $result->skuname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="validationTooltip05" class="form-label">Brand Name</label>
                            <select class="form-select" name="brand_id" id="validationTooltip05" required>
                                <option selected disabled value="">Choose Brand</option>
                                @foreach ($resutl_b as $result)
                                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="validationTooltip01" class="form-label">Item Name</label>
                            <input type="text" placeholder="itemname" class="form-control" name ="itemname" id="validationTooltip01"  >
                        </div>
                            <div class="col-md-8">
                                <label for="validationTooltip02" class="form-label">Item specification </label>
                                {{-- <input type="text" placeholder="Details " class="form-control" name ="itemdescription" id="validationTooltip02"  > --}}
                                <textarea name="itemdescription" required class="form-control" id="validationCustom02" cols="5" rows="5"></textarea>
                            </div>


                            <div class="col-md-4">
                                <label for="validationTooltip04" class="form-label">Status</label>
                                <select class="form-select" name="status" id="validationTooltip04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>

                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            <a  href="{{ route('item_list') }}"><span class="btn btn-success">Go To List</span></a>
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
