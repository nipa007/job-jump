<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
          <a class="navbar-brand text-white" href="#index.html">job<span>Jump</span></a>
          <button class="navbar-toggler shadow-non border-0" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <!-- toggle icon -->
         <div class="collapse navbar-collapse" id="myNavbar">
           <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('home.page')}}">Home</a>

              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about.us')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('jobPage')}}">Job</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('contact.us')}}">contact</a>
              </li>
            </ul>


            @if (!Auth::user())

                <a class="btn btn-outline-success my-2 my-sm-0" href="{{route('login')}}">
                    Log In
                </a>

                <div class="drop" id="dropd">
                    <button data-bs-toggle="dropdown" class="dropdown-toggle">Sign Up</button>
                <div class="content-d">
                    <a class="dropdown-item" href="{{route('candidate.register')}}">Candidate</a>
                    <a class="dropdown-item" href="{{route('company.register')}}" >Company</a>
                </div>

                </div>

            @endif


            @if (Auth::user())


                <div class="drop" id="dropd">
                    <button data-bs-toggle="dropdown" class="dropdown-toggle">Profile</button>
                <div class="content-d">
                   @if (Auth::user()->role == 'admin')

                    <a class="dropdown-item" href="{{route('admin.dashboard')}}" >Dashboard</a>

                   @elseif (Auth::user()->role == 'company')

                    <a class="dropdown-item" href="{{route('company.dashboard')}}" >Dashboard</a>

                   @else

                    <a class="dropdown-item" href="{{route('candidate.dashboard')}}" >Dashboard</a>

                   @endif
                   
                    <a class="dropdown-item" id="show" onclick="show()" href="{{route('logout')}}">Logout</a>
                </div>

                </div>

            @endif

        </div>
    </nav>
    <!-- navend -->


</header>
