<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Project KD</title>


  </head>
  <body>
    <div class="container-fluid bg-info">
    <h1 class='text-center'>Laravel Project! Contact</h1>
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
                <p>More About the Benefits and Options We Offer:
TRAVEL BENEFITS
- Frontier Travel Perks: You're not the only one that gets to travel! Employees, dependents, spouse, children, domestic partners, parents and companions have access to travel privileges on Frontier.
- Buddy Passes: Receive 28 Buddy Passes (one-way) per year for friends and family.
401(k) BENEFITS
- Charles Schwab Retirement Plan: You have the option to contribute on a pre-tax basis, post-tax, Roth basis or the combination.
- Investments: We have a range of investments including Target Date Retirement Funds. Also enjoy retirement plan assistance with Guided Choice.
- Company Contributions: Effective January 16, 2019, the Company will make direct contributions to the 401(k) Plan on behalf of each eligible Pilot equal to twelve percent (12%) of the Pilot's compensation. No Pilot contributions will be required. Company direct contributions shall increase during the term of the Agreement as follows:
March 2, 2020: 13% of compensation
March 2, 2021: 14% of compensation
March 2, 2022 and thereafter 15% of compensation.
OTHER BENEFITS
- Time Off:: We offer generous vacation time that increases over time. You'll also get up to 120 days over 12 years of sick leave that you can accrue and maintain even while on a leave of absence.
- Additional Benefits: We provide Company-Paid Life and AD&D insurance. We also offer a range of voluntary insurance options including Short and Long-Term Disability, pet insurance and more!</p>
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
