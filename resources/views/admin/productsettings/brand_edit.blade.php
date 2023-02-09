@extends('admin.layouts.master')

@section('contents')
<div class="pagetitle">
    <h1>Product Brand</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">Brand Edit</li>
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
                    <h5 class="card-title">Update Brand</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                     <form action='{{ route('brand_update',$result->id) }}' method="post" enctype="multipart/form-data"
                     class="row g-3 needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="id" value="{{ $result->id  }}">
                            <div class="col-md-4">
                                <label for="validationTooltip01" class="form-label">Brand Name</label>
                                <input type="text" value="{{ $result->name  }}" class="form-control" name ="name" id="validationTooltip01"  >
                            </div>
                            <div class="col-md-8">
                                <label for="validationTooltip02" class="form-label">Country of Origin </label>
                                <input type="text" value="{{ $result->origin  }}" class="form-control" name ="origin" id="validationTooltip02"  >
                            </div>


                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a  href="{{ route('all_brand') }}"><span class="btn btn-primary">Go To List</span></a>
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
