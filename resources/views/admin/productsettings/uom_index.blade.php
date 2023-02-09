@extends('admin.layouts.master')

@section('contents')



    <div class="pagetitle">
        <h1>Products</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
            <li class="breadcrumb-item active">UOM </li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


            <div class="col-lg-12">
                <div class="card c-shadow">
                <div class="card-body">
                    <h5 class="card-title">UOM</h5>
                    <a  href="{{ route('add_uom') }}"><span class="btn btn-primary mb-2">New Entry</span></a>
                    <!-- Table with stripped rows -->
                    <table class="table table-success datatable">
                        <thead class="">
                            <tr class="ttexthead border border-primary">
                                <th class="border border-primary">#</th>
                                <th class="border border-primary">Sys-Sl#</th>
                                <th class="border border-primary">UOM Code</th>
                                <th class="border border-primary">Description</th>
                                <th class="border border-primary">Created at</th>
                                <th class="border border-primary">Updated at</th>
                                <th class="border border-primary">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($results as $result)
                            {{-- {{ dd($result) }} --}}
                                <tr class="ttextbody align-middle text-center">
                                    <td class="text-bg-light">{{  $loop->iteration }}</td>
                                    <td class="text-bg-light">{{  $result->id }}</td>
                                    <td class="text-bg-light">{{  $result->name }}</td>
                                    <td class="text-bg-light">{{  $result->description }}</td>
                                    <td class="text-bg-light">{{  $result->created_at }}</td>
                                    <td class="text-bg-light">{{  $result->updated_at }}</td>

                                    <td class="text-bg-light">
                                        <a href="{{ route ('uom_edit', $result->id) }}"><span class="badge rounded-pill text-bg-warning">Edit</span></a>

                                    <a class="button-delete" data-id="{{$result->id}}" data-url='{{ route('uom_delete') }}' href='#'>
                                        <span class="badge rounded-pill text-bg-danger">Delete</span>
                                    </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
                </div>
            </div>
        </div>
    </section>
@endsection

