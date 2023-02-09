@extends('admin.layouts.master')

@section('contents')
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">

            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</div>
<div class="pagetitle">
    <h1>Unit Of Measure</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">UOM</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <h4>Update UOM</h4>

    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <div class="card c-shadow">
                <form action='{{ route('uom_update',$result->id) }}' method="post" enctype="multipart/form-data"
                    class="row g-3 needs-validation" novalidate>

                       @csrf
                    <input type="hidden" name="id" value="{{ $result->id  }}">
                    {{-- <input type="hidden" name="id" value="{{ $result->id }}"> --}}
                    <div class="col-md-6 m-3 mt-4">
                        <label for="validationTooltip01" class="form-label">UOM Code</label>
                        <input type="text" value="{{ $result->name  }}" class="form-control" name ="name" id="validationTooltip01"  >
                    </div>
                    <div class="col-md-10 m-3">
                        <label for="validationTooltip02" class="form-label">Description</label>
                        <input type="text" value="{{ $result->description  }}" class="form-control" name ="description" id="validationTooltip02"  >
                    </div>



                    <div class="col-12 mb-3 mt-3 m-3">
                        <button class="btn btn-primary" type="submit">Update</button>
                        <a  href="{{ route('all_uom') }}"><span class="btn btn-primary">Uom List</span></a>
                    </div>
                  </form>
            </div>
        </div>
        <div class="col-lg-3"></div>
    </div>


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
