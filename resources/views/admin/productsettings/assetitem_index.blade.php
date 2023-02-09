@extends('admin.layouts.master')

@section('contents')

    <div class="pagetitle">
        <h1>Products Items</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Item List </li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


            <div class="col-lg-12">
                <div class="card c-shadow">
                <div class="card-body">

                    <a  href="{{ route('add_item') }}"><span class="btn btn-primary mb-2">New Entry</span></a>
                    <!-- Table with stripped rows -->
                    <table class="table table-success datatable">
                        <thead class="">
                            <tr class="ttexthead border border-primary">
                                <th class="border border-primary">#</th>
                                <th class="border border-primary">Category</th>
                                <th class="border border-primary">ItemType</th>
                                <th class="border border-primary">ModelNo</th>
                                <th class="border border-primary">Brand</th>
                                <th class="border border-primary">Item</th>
                                <th class="border border-primary">Specification</th>
                                <th class="border border-primary">code</th>
                                <th class="border border-primary">Action</th>
                            </tr>
                        </thead>
                         <tbody>

                            @foreach ($items as $result)
                            <tr class="ttextbody align-middle text-center border border-primary">
                                <td class="text-bg-light align-middle border border-primary ">{{  $loop->iteration }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->catname }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->itemtypename }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->model_no }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->brandname }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->itemname }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->itemdescription }}</td>
                                <td class="text-bg-light align-middle border border-primary">{{  $result->code }}</td>

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
                            {{-- {{ $items->links() }} --}}
                        </div>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection

