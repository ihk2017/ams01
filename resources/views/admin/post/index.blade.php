@extends('admin.layouts.master')

@section('contents')



<div class="pagetitle">
    <h1>Post</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">All Posts</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
       <div class="col-lg-12">
            <div class="card c-shadow">
              <div class="card-body">
                <a  href="{{ route('add_post') }}"><span class="btn btn-primary mb-2">New Post Entry</span></a>
                <!-- Table with stripped rows -->
                <table class="table table-success datatable">
                  <thead>

                    <tr class="ttexthead border border-primary">
                        <th scope="col">#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">Photo</th>
                        <th scope="col">Post By</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                      {{-- `title`, `category_id`, `user_id`, `short_description`, `description`, `status`, `slug` --}}
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($results as $result )
                    <tr class="ttexthead typetext border border-primary align-middle">
                        <th class="text-bg-light align-middle typetext" scope="row">{{  $loop->iteration }}</th>
                        <th class="text-bg-light align-middle typetext " scope="row">{{  $result->postcode  }}</th>
                        <th class="text-bg-light align-middle typetext" scope="row">{{  $result->title }}</th>
                        <th class="text-bg-light align-middle typetext" scope="row">{{  $result->Category->name  }}</th>
                        <td>
                            <img width="80" height="60" src="{{ asset('uploads/products').'/'.$result->photo }}" alt="">
                        </td>
                        <th class="text-bg-light align-middle typetext" scope="row">{{  $result->User->name  }}</th>
                        <th class="text-bg-light align-middle typetext" scope="row">{{  $result->status  }}</th>
                        <th class="text-bg-light align-middle typetext" scope="row">{{  $result->created_at  }}</th>
                        <td class="bg-info align-middle typetext">
                            <a href="{{ route('post_edit',$result->id) }}"><span class="badge rounded-pill text-bg-warning">Edit</span></a>

                            <a class="button-delete" data-id="{{$result->id}}" data-url='{{ route('post_delete') }}' href='#'>
                                <span class="badge rounded-pill text-bg-danger">Delete</span>
                            </a>
                        </td>
                    </tr>

                    @endforeach
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
                {{-- {{  $results->links() }} --}}
              </div>
            </div>

    </div>
  </section>
  @push('script')
  <script type="text/javascript">
    $(document).ready(function() {
      $('.summernote').summernote({
        height: 400
    });
    });
    </script>
  @endpush
@endsection

