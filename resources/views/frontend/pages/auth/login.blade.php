
<link rel="stylesheet" type="text/css" href="{{asset('css/auth.css')}}">

  <!-- login start -->

                <div class="loginform" id="loginForm">
                	<form class="form-group" action="{{route('do.login')}}" method="post">
                        @csrf
			              <h1>Login Here</h1>

                          @if(session()->has('message'))
                          <div class="cbg-danger">
                              {{ session('message') }}
                          </div>
                      @endif




			              <div class="inp-box">
			              	<label for="">Email</label>
				              <input type="email" placeholder="Enter your email" name="email">
			              </div>

                          @error('email')<span class="text-danger">{{$message}}</span>@enderror

			              <div class="inp-box">
			              	<label for="">Password</label>
				              <input type="password" placeholder="password" name="password">
			              </div>

                          @error('password')<span class="text-danger">{{$message}}</span> @enderror

                    <div class="rem-forg">
            	        <label>
            		        <input type="checkbox">
            		         Remember Me.
            	        </label>
            	        <a href="#">Forgot password?</a>
                    </div>
                  <button type="submit" class="btn" onclick="showModal()">Login</button>
                </form>
                </div>

         <!-- login end -->


