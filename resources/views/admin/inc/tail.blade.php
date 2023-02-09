<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
{{--<script src=" {{ asset('backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/echarts/echarts.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/php-email-form/validate.js') }}"></script> --}}






<!-- sweetalert2 js -->
<script src="{{ asset('backend/assets/js/sweetalert2.min.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('backend/assets/js/jquery.js') }}"></script>
<script src="{{ asset('backend/assets/js/main.js') }}"></script>
  <!-- toastf js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
 <!-- summernote JS File -->
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

 <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
{{-- @stack('script') --}}

<script>
  @if(Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.warning("{{ session('warning') }}");
  @endif
</script>

@stack('script')

<script>
$(document).on('click', '.button-delete', function (e) {
  e.preventDefault();
  var id = $(this).data('id');
  var url = $(this).data('url');
  Swal.fire({
          title: "Are you sure!",
          type: "warning",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes!",
          showCancelButton: true,
  }).then((result) => {
    if (result.isConfirmed) {
        $.ajax({
            type: "POST",
            url: url,
            data: {
              "_token": "{{ csrf_token() }}",
              "id": id
            },
            success: function (data) {
                  toastr.success(data.message);
                  setTimeout(function () {
                    location.reload();
                  }, 1000);

                }
        });
    }
  })
});

</script>
