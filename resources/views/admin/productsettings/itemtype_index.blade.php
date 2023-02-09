@extends('admin.layouts.master')

@section('contents')



    <div class="pagetitle">
        <h1>Products</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Item Type </li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card c-shadow">
                <div class="card-body">
                    <h5 class="card-title">Item Type</h5>
                    <a  href="{{ route('add_itemtype') }}"><span class="btn btn-primary mb-2">New Entry</span></a>
                    <!-- Table with stripped rows -->

                    <table class="table table-success datatable">
                        <thead>

                          <tr class="ttexthead border border-primary">
                              <th scope="col">#</th>
                              <th scope="col">Category</th>
                              <th scope="col">Type Name</th>
                              <th scope="col">Entry By</th>
                              <th scope="col">Status</th>
                              <th scope="col">Date</th>
                              <th scope="col">Action</th>
                            {{-- `title`, `category_id`, `user_id`, `short_description`, `description`, `status`, `slug` --}}
                          </tr>
                        </thead>
                        <tbody class="typetext">

                          @foreach ($results as $result )

                          <tr class="ttexthead border border-primary align-middle typetext ">
                              <th class="text-center bg-light align-middle" scope="row">{{  $loop->iteration }}</th>
                              <th class="text-center bg-light align-middle " scope="row">{{  $result->Category->name  }}</th>

                              <th class="text-center align-middle bg-primary bg-light " scope="row">{{  $result->name }}</th>

                              <th class="text-center bg-light align-middle " scope="row">{{  $result->User->name  }}</th>
                              <th class="text-center  bg-light align-middle " scope="row">{{  $result->status  }}

                            </th>
                              <th class="text-center bg-light align-middle" scope="row">{{  $result->created_at  }}</th>
                               <td class="text-center align-middle bg-light">
                                <a href="{{ route('itemtype_edit',$result->id)}} "><span class="edtbtn badge rounded-pill text-bg-success">Edit</span></a>

                                  <a class="button-delete" data-id="{{$result->id}}" data-url='{{ route('itemtype_delete') }}' href='#'>
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
        </div>

    </section>
@endsection

