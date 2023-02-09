@extends('frontend.layouts.master')

@section('content')
<div class="container-fluid">
    <div class="pagetitle">
        <h1>Post</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item active">{{  $frontend_posts->Category->name  }}</li>
            <li class="breadcrumb-item active">{{ $frontend_posts->title }}</li>
        </ol>
        </nav>
    </div>
    <section class="section">
        <div class="row">
           <div class="col-lg-9">
                <div class="card">
                    <div class="card-body post-body-color mb-2">
                        <img width="100%" height="500" src="{{ asset('uploads/products').'/'.$frontend_posts->photo }}"  alt="">
                    </div>
                    <div class="card-info px-3 ">
                        <span class="border p-1 text-primary thover">{{ $frontend_posts->slug }}</span>
                        <span class="border p-1 text-info thover">posted on : {{ $frontend_posts->created_at->format('d/M/Y') }}</span>
                        <span class="border p-1 text-success thover">posted by : {{ $frontend_posts->user_id }}</span>
                        <span class="border p-1 text-warning thover">{{  $frontend_posts->User->name  }}</span>
                    </div>
                    <div class="sdes"><span> {!! $frontend_posts->short_description !!}</span>

                    </div>
                    <p>{!! $frontend_posts->description !!} </p>

                </div>
            </div>
            <div class="col-lg-3 bg-info text-color">
                <div class="card mt-2">
                    <div class="card-body post-body-color">
                       <h4 class=" cats ">Categories</h4>
                       @foreach ($categories as $category )
                        <span class="sulgs-c bg-success text-light" >{{ $category->name }}</span>
                       @endforeach

                    </div>

                </div>
                <div class="card mt-2">
                    <div class="card-body post-body-color mt-2">
                        <h4 class=" cats">Total Posts : {{ $allpost->count() }}</h4>
                        <h4 class=" cats">Active Posts : {{ $apost->count() }}</h4>
                        <h4 class=" cats">Inactive Posts : {{ $ipost->count() }}</h4>
                        @foreach ($posts as $post )
                        <span> <a class="sulgs-c bg-success text-light" href="{{ route('my_allsingle_post',$post->slug) }}">{{  $post->title }}</a></span>
                        @endforeach

                     </div>

                </div>

                <div class="card mt-2">
                    <div class="card-body post-body-color mt-2">
                        <h4 class=" cats">Slugs</h4>
                        @foreach ($posts as $post )
                        <span> <a class="sulgs-c bg-success text-light" href="{{ route('my_allsingle_post',$post->slug) }}">{{  $post->slug }}</a></span>
                        @endforeach
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-body post-body-color mt-2 text-center">
                        <h4 class=" cats">Image Gallery</h4>
                        @foreach ($postsimg as $img )
                        <span><a href=""> <img width="100" height="80" class="p-1 mb-2" src="{{ asset('uploads/products').'/'.$img->photo }}" {{ $img->slug }}  alt=""> </a>
                        </span>
                        @endforeach

                        {{  $postsimg->links() }}
                        {{  $postsimg->count() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection

