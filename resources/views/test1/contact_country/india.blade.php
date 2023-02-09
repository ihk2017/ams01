<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{('css/styles.css')}} " rel="stylesheet" />
    <title>Laravel Project KD</title>


  </head>
  <body>
    <div class="container-fluid bg-info">
    <h1 class='text-center'>Contact : India</h1>
    </div>
    <div class="container-fluid bodayarea">
        <div class="row">
            <div class="col-md-2 bg-dark text-light text-center"><h1>Dashboard</h1>
                <ul>
                    <li> <a href="{{route('/')}}">Welcome</a> </li>
                    {{-- <li> <a href="{{route('home')}}">Home</a> </li> --}}
                    <li> <a href="{{route('about')}}">About Us</a>
                        <ul>
                          <li> <a href="{{route('usa')}}">USA</a> </li>
                          <li> <a href="{{route('singapore')}}">Singapora</a> </li>
                          <li> <a href="{{route('india')}}">India</a> </li>
                        </ul>
                    </li>
                    <li> <a href="{{route('contact')}}">Contact</a> </li>
                    <li> <a href="{{route('user')}}">User</a> </li>
                </ul>
            </div>
            <div class="col-md-10 bg-light">Body
            <form action="{{url('contact-submit')}} " method="post">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Write your name">
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Write your name">
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" class="form-control" placeholder="Write your name">
                </div>
                <div class="col-md-6">
                  <input type="submit" name="submit" class="btn btn-success" value="Submit">
                </div>
              </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
