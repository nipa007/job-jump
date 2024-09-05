@extends('frontend.layouts.main')

@section('content')

<section id="ft-div">



    <div class="container-fluid banner">




          <div class="row">



             <div class="col-md-8">

                 <div class="left-cont">

                    @if(session()->has('message'))
                        <div class="alert alert-primary">
                            {{ session('message') }}
                        </div>
                    @endif

                    @if (session()->has('logout'))
                    <div class="alert alert-danger">
                        {{ session('logout') }}
                    </div>
                    @endif

                     <p>Find Your Dream Job</p>
                     <h1>Your Dream Job is <br> Waiting</h1>
               <p>Discover opportunities, Connect with employers And take the next step towards a fullfilling work life.</p>
                     <!-- <a href="#contact" class="btn">LET'S CHAT!</a> -->
                     <!-- search bar -->
                     <div class="search-bar">
                         <!-- dropdown -->
                         <div class="dropdown">
                             <div class="dropdown-text">
                                 <span>Category</span>
                                 <i class="fa-solid fa-chevron-down click-me"></i>
                             </div>
                             <!-- dropdown list -->
                         <ul class="dropdown-list" id="dropNow">
                             <li class="dropdown-list-item">Executive</li>
                             <li class="dropdown-list-item">Manager</li>
                             <li class="dropdown-list-item">Worker</li>
                             <li class="dropdown-list-item">Office Incharge</li>
                             <li class="dropdown-list-item">Officer</li>
                         </ul>
                         </div>


                         <div class="search-box">
                             <input type="text" id="s-input" placeholder="job title, company name...">
                             <i class="fa-solid fa-magnifying-glass"></i>
                         </div>

                     </div>
                     <!-- search end -->

                 </div>

             </div>
             <div class="col-md-4 img-r">
                 <img src="img/ab.png">
             </div>
        </div>
    </div>

</section>

<section id="x">
    <div class="container-fluid">
        <div class="h-text">
            <h2>New & Random Jobs</h2>
            <p>Grub your own job for your <br>bright Future</p>
        </div>
        <div class=" row job-opt">
            <div class="btn-group btn-group-justified col-lg-7">
      <button type="button" class="btn active">All jobs</button>
      <button type="button" class="btn">Featured jobs</button>
      <button type="button" class="btn">Recent jobs</button>
      <button type="button" class="btn">Part time</button>
      <button type="button" class="btn">Full time</button>
    </div>
        </div>

        <div class="row">
            <div class="crd-group col-lg-8 m-auto">

                <div class="card">
                    <div class="ribbon">
                        <i class="fa-solid fa-star"></i>
                    </div>
        <div class="card-body">
            <div class="row">
            <div class="icon-c mr-3 col-lg-2">
                <i class="fa-brands fa-wordpress"></i>
            </div>
            <div class="text-c mr-3 col-lg-2.5">
                <h4>Manager</h4>
                <p>Xpress bd Ltd</p>
            </div>
          <div class="text-c mr-3 col-lg-2.5">
                <p class="ii">
                    <i class="fa-solid fa-location-dot"></i>Banani, Dhaka
                </p>
            </div>
          <div class="text-c mr-3 col-lg-2.5">
                <p class="taka">
                    ৳30000-40000/m
                </p>

            </div>
          <div class="text-c col-lg-2.5">
              <div class="j-time">
                  <p class="one">Full time</p>
                  <div class="text-des">
                      <p class="two">Semi Government</p>
                       <p class="three">urgent</p>
                  </div>

              </div>
          </div>
       </div>

        </div>
        <!-- c-body end -->
        <div class="card-footer">
            <div class="row ft">
                <div class="col-lg-4">
                    <p>Experience: 2-4 years</p>
                </div>

                <div class="col-lg-4">
                    <p>Requirement: Graduation</p>
                </div>

                <div class="col-lg-4">
                    <a class="app">Apply Now<i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
      </div>

      <div class="card mt-3">
        <div class="card-body">

            <div class="row">
            <div class="icon-c mr-3 col-lg-2">
                <i class="fa-brands fa-wordpress"></i>
            </div>
            <div class="text-c mr-3 col-lg-2.5">
                <h4>Executive</h4>
                <p>NAZ Ltd</p>
            </div>
          <div class="text-c mr-3 col-lg-2.5">
                <p class="ii">
                    <i class="fa-solid fa-location-dot"></i>Gazipur
                </p>
            </div>
          <div class="text-c mr-3 col-lg-2.5">
                <p class="taka">
                    ৳30000-40000/m
                </p>
            </div>
          <div class="text-c col-lg-2.5">
                <div class="j-time">
                  <p class="one">Part time</p>
                  <div class="text-des">
                      <p class="two">Private</p>
                       <p class="three">Normal</p>
                  </div>

              </div>
            </div>
       </div>

        </div>
        <div class="card-footer">

                <div class="row ft">
                <div class="col-lg-4">
                    <p>Experience: 2-4 years</p>
                </div>

                <div class="col-lg-4">
                    <p>Requirement: Diploma</p>
                </div>

                <div class="col-lg-4">
                    <a class="app">Apply Now<i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>

        </div>
      </div>

      <div class="card mt-3">
        <div class="card-body">

            <div class="row">
            <div class="icon-c mr-3 col-lg-2">
                <i class="fa-brands fa-wordpress"></i>
            </div>
            <div class="text-c mr-3 col-lg-2.5">
                <h4>Executive</h4>
                <p>X monalisa</p>
            </div>
          <div class="text-c mr-3 col-lg-2.5">
                <p class="ii">
                    <i class="fa-solid fa-location-dot"></i>mawna, Gazipur
                </p>
            </div>
          <div class="text-c mr-3 col-lg-2.5">
                <p class="taka">
                    ৳30000-40000/m
                </p>
            </div>
          <div class="text-c col-lg-2.5">
                <div class="j-time">
                  <p class="one">Full time</p>
                  <div class="text-des">
                      <p class="two">Graduation</p>
                       <p class="three">urgent</p>
                  </div>

              </div>
            </div>
       </div>

        </div>
        <div class="card-footer">

                <div class="row ft">
                <div class="col-lg-4">
                    <p>Experience: 2-4 years</p>
                </div>

                <div class="col-lg-4">
                    <p>Requirement: M.A</p>
                </div>

                <div class="col-lg-4">
                    <a class="app">Apply Now<i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>

        </div>
      </div>

      <div>
          <button class="btn btn-success mt-3"><a href="{{url('/jobs')}}">
          View More</button></a>
      </div>


            </div>
        </div>

<!-- jobs -->



        <div class="row">
            <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fa fa-desktop"></i>
                </div>
                <h3>Register an Account</h3>
                <p>First you click signUp go for register the account as a candidate. First time you go for register after that you can LogIn your account </p>
            </div>

                <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fa fa-tablet"></i>
                </div>
                <h3>Create Your CV</h3>
                <p>You can create your CV from your dashboard. You can create your cv for one time, after that you can view and update your CV</p>
            </div>

      <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fa fa-line-chart"></i>
                </div>
                <h3>Find Your Job</h3>
                <p>You can find your job from your account. There are many types of job. you can select your one.</p>
            </div>


         <div class="col-md-3 text-center">
                <div class="icon">
                    <i class="fa fa-paint-brush"></i>
                </div>
                <h3>Apply for job</h3>
                <p>All the job there will be apply button. If you can fullfill all the job requirement then you apply for that job. You can not apply to rhe same job again and again</p>
            </div>

  </div>
    </div>


</section>

@endsection
