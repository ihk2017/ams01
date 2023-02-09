@extends('admin.layouts.master')

@section('contents')



<div class="pagetitle">
    <h1>Category</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
        <li class="breadcrumb-item active">All Categories</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
       <div class="col-lg-12">


            <div class="card c-shadow">
              <div class="card-body">
                <h5 class="card-title">Category List</h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped table-bordered datatable">
                  <thead>
                    <tr class="text-center bg-dark text-light">

                      <th scope="col">Sl#</th>
                      <th scope="col">Category Name</th>
                      <th scope="col">Status</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Actions</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($results as $result)
                        <tr>
                            <th class="text-center" scope="row">{{  $loop->iteration }}</th>
                            <td>{{  $result->name }}</td>
                            <td>{{  $result->status }}</td>
                            <td>{{  $result->created_at }}</td>
                            <td class="text-center">
                                <a href="{{ route('category_edit',$result->id) }}"><span class="badge rounded-pill text-bg-warning">Edit</span></a>



                                <a class="button-delete" data-id="{{$result->id}}" data-url='{{ route('category_delete') }}' href='#'>
                                    <span class="badge rounded-pill text-bg-danger">Delete</span>
                                </a>
                            </td>
                        </tr>
                    @endforeach


                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
<div class="pages">
    {{-- {{ $results->links() }} --}}
</div>
              </div>
            </div>

    </div>
  </section>
@endsection

