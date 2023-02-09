@extends('admin.layouts.master')

@section('contents')

    <div class="pagetitle">
        <h1>User</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
            <li class="breadcrumb-item active">User's List </li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


            <div class="col-lg-12">
                <div class="card c-shadow">
                <div class="card-body">

                    {{-- <a  href="#"><span class="btn btn-primary mb-2">New Entry</span></a> --}}
                    <!-- Table with stripped rows -->
                    <table class="table table-success datatable">
                        <thead class="">
                            <tr class="ttexthead border border-primary">
                                <th class="border border-primary">#</th>
                                <th class="border border-primary">UserID</th>
                                <th class="border border-primary">Name</th>
                                <th class="border border-primary">Email</th>
                                <th class="border border-primary">Designation</th>
                                <th class="border border-primary">User Type</th>
                                <th class="border border-primary">Address</th>
                                <th class="border border-primary">Action</th>
                            </tr>
                        </thead>
                         <tbody>

                            @foreach ($users as $result)
                            <tr class="ttextbody align-middle text-center border border-primary">
                                <td class="text-bg-light align-middle border border-primary ">{{  $loop->iteration }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->id }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->name }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->email }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->designation }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->user_type }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->address }}</td>

                                <td class="text-bg-light  border border-primary">
                                    <a href="{{ route('item_edit',$result->id)}} "><span class="edtbtn badge rounded-pill text-bg-success">Edit</span></a>
                                     <a class="button-delete" data-id="{{ $result->id }}" data-url='{{ route('item_delete') }}' href='#'>
                                        <span class="badge rounded-pill text-bg-danger">Delete</span>
                                    </a>

                                </tr>


                        @endforeach

                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                        <div class="pages">
                         {{ $users->links() }}
                        </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection

