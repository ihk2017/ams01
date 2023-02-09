@extends('admin.layouts.master')

@section('contents')



    <div class="pagetitle">
        <h1>Personal Info</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
            <li class="breadcrumb-item active">All Persons info</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


            <div class="col-lg-12">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Personal Information</h5>
                    <a  href="{{ route('add_bio') }}"><span class="btn btn-primary mb-2">New Entry</span></a>
                    <!-- Table with stripped rows -->
                    <table class="table table-hover">
                    <thead class="align-middle">
                        <tr class="ttexthead border border-primary">
                            <th class="border border-primary">#</th>
                            <th class="border border-primary">Full Name</th>
                            <th class="border border-primary">F.Name</th>
                            <th class="border border-primary">M.Name</th>
                            <th class="border border-primary">DOB</th>
                            <th class="border border-primary">Address1</th>
                            <th class="border border-primary">Address2</th>
                            <th class="border border-primary">Religion</th>
                            <th class="border border-primary">Hobby</th>
                            <th class="border border-primary">H.Edu</th>
                            <th class="border border-primary">Sex</th>
                            <th class="border border-primary">Created</th>
                            <th class="border border-primary">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                            <tr class="ttextbody">
                                <td>{{  $loop->iteration }}</td>
                                <td>{{  $result->fullname }}</td>
                                <td>{{  $result->fathername }}</td>
                                <td>{{  $result->mothername }}</td>
                                <td>{{  $result->dateofbirth }}</td>
                                <td>{{  $result->permanentaddress }}</td>
                                <td>{{  $result->presentaddress }}</td>
                                <td>{{  $result->religion }}</td>
                                <td>{{  $result->hpbby }}</td>
                                <td>{{  $result->topeducation }}</td>
                                <td>{{  $result->gender }}</td>
                                <td>{{  $result->created_at }}</td>
                                <td>
                                    <a href="{{ route('bio_edit',$result->id) }}"><span class="badge rounded-pill text-bg-warning">Edit</span></a>

                                    <a  href="{{ route('bio_delete',$result->id) }}"><span class="badge rounded-pill text-bg-danger">Delete</span></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                        {{ $results->onEachSide(1)->links() }}
                </div>
                </div>
            </div>
        </div>
      </section>
@endsection

