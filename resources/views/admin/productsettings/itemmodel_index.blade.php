@extends('admin.layouts.master')

@section('contents')



    <div class="pagetitle">
        <h1>Products</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Item Model List </li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card c-shadow">
                <div class="card-body">
                    <h5 class="card-title">Item Model </h5>
                    <a  href="{{ route('add_itemmodel') }}"><span class="btn btn-primary mb-2">New Entry</span></a>
                    <!-- Table with stripped rows -->

                    <table class="table table-success datatable ">
                        <thead>
                            <tr class="ttexthead">
                                <th scope="col">#</th>
                                <th scope="col">Type Name</th>
                                <th scope="col">Model NO</th>
                                <th scope="col">Entry By</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="typetext">

                          @foreach ($requests as $result )

                          <tr class="  bg-light ">
                              <th class="text-center  bg-light text-bold align-middle" scope="row">{{  $loop->iteration }}</th>
                              <th class="text-center  bg-light align-middle " scope="row">{{  $result->itemType->name  }}</th>
                              <th class="text-center  bg-light align-middle  " scope="row">{{  $result->model_no }}</th>

                              <th class="text-center  bg-light align-middle " scope="row">{{  $result->User->name  }}</th>

                              <th class="text-center  bg-light align-middle " scope="row">{{  $result->status  }}

                            </th>
                              <th class="text-center  bg-light align-middle" scope="row">{{  $result->created_at  }}</th>
                               <td class="text-center  bg-light align-middle ">
                                <a href="{{ route('itemmodel_edit',$result->id)}} "><span class="edtbtn badge rounded-pill text-bg-success">Edit</span></a>

                                  <a class="button-delete" data-id="{{$result->id}}" data-url='{{ route('itemmodel_delete') }}' href='#'>
                                      <span class="badge rounded-pill text-bg-danger">Delete</span>
                                  </a>
                              </td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                      <!-- End Table with stripped rows -->
                       {{-- {{  $requests->links() }} --}}

                </div>
                </div>
            </div>
        </div>

    </section>
@endsection

