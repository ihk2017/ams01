@extends('admin.layouts.master')

@section('contents')



    <div class="pagetitle">
        <h1>Employee Info</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
            <li class="breadcrumb-item active">All Employees info</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


            <div class="col-lg-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Employee Information</h5>
                    <a  href="{{ route('add_emp') }}"><span class="btn btn-primary mb-2">New Entry</span></a>
                    <!-- Table with stripped rows -->
                    <table class="table table-success ">
                        <thead class="">
                            <tr class="ttexthead border border-primary">
                                <th class="border border-primary">#</th>
                                <th class="border border-primary">Sys-Sl#</th>
                                <th class="border border-primary">Full Name</th>
                                <th class="border border-primary">Address</th>
                                <th class="border border-primary">Contact</th>
                                <th class="border border-primary">Designation</th>
                                <th class="border border-primary">Image</th>
                                <th class="border border-primary">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $result)
                                <tr class="ttextbody align-middle text-center">
                                    <td class="text-bg-warning">{{  $loop->iteration }}</td>
                                    <td class="text-bg-danger">{{  $result->id }}</td>
                                    <td>{{  $result->empname }}</td>
                                    <td>{{  $result->address }}</td>
                                    <td>{{  $result->contactno }}</td>
                                    <td>{{  $result->designation }}</td>
                                    <td class="text-bg-primary"><img style="width: 60%; height:40px"  src="{{ asset('images/myimages/'.$result->empimg) }} " alt=""> </td>
                                    <td class="text-bg-success">
                                        <a href="{{ route('emp_edit',$result->id) }}"><span class="badge rounded-pill text-bg-warning">Edit</span></a>
                                        <a onclick="return confirm('Are you sure to delete ?')" href="{{ route('emp_delete',$result->id) }}"><span  class="badge rounded-pill text-bg-danger">Delete</span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                    <div class="row">
                        <div class="col-md-9">{{  $results->onEachSide(1)->links() }}</div>
                        <div class="col-md-3 align-middle text-center ">Total Records : {{  $results->total() }}</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection

