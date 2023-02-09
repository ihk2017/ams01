@extends('admin.layouts.master')

@section('contents')



    <div class="pagetitle">
        <h1>Archive</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
            <li class="breadcrumb-item active">Archive : Personal</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">


            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Personal Images</h5>
                        <a  href="{{ route('add_image') }}"><span class="btn btn-primary mb-4">New Entry</span></a>
                        <!-- Table with stripped rows -->
                        <div class="gallery1 mb-2 text-center bg-dark">
                                <h3 class=" text-light">Churuivati-2022 : NurZee Garden</h3>
                                @foreach ($results as $result)
                                <img src="{{ asset('images/myimages/'.$result->empimg) }}" class="img-thumbnail mt-4 mb-4" height="200px" width="200px" alt="">

                                @endforeach

                        </div>
                        {{ $results->onEachSide(1)->links() }}
                    </div>
                </div>
            </div>
        </div>
      </section>
@endsection

