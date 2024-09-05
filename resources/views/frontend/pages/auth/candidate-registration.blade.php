<!-- sign up start ---->
<link rel="stylesheet" type="text/css" href="{{asset('css/auth.css')}}">

<div class="signform" id="sg">

    <form action="{{route('candidate.do.register')}}" method="post">
        @csrf
          <h1>Sign up as Candidate</h1>
          <div class="inp-box">
              <label for="">First Name</label>
              <input type="text" name="first_name" placeholder="First name">
          </div>

          @error('first_name')<span class="text-danger">{{$message}}</span> @enderror

          <div class="inp-box">
            <label for="">Last Name</label>
            <input type="text" name="last_name" placeholder="Last name">
        </div>
        @error('last_name')<span class="text-danger">{{$message}}</span> @enderror

          <div class="inp-box">
              <label for="">Password</label>
              <input type="password" name="password" placeholder="Password" required>
          </div>

          @error('password')<span class="text-danger">{{$message}}</span> @enderror

    <div class="inp-box">
              <label for="">Email</label>
              <input type="email" name="email" placeholder="Email" required>
          </div>


          @error('email')<span class="text-danger">{{$message}}</span> @enderror

  <button type="submit" class="btn">Sign UP</button>
</form>
</div>




<!-- signup end -->
