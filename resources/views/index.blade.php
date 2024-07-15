<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
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
                    <a class="nav-link active" href="{{url('/')}}">Home</a>

                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#Job">Job</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">contact</a>
                  </li>
                </ul>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log In</button>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign Up</button>

            </div>
        </nav>
        <!-- navend -->
	</header>
	<section id="ft-div">

		<div class="container-fluid banner">
          	<div class="row">
          	   <div class="col-md-8">
          	   	<div class="left-cont">

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
          	<button class="btn btn-success mt-3"><a href="#Job">
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

		<section id="about">
		  <div class="container-fluid">
			<div>
					<h2>About Us</h2>
				</div>
				<div class="d">
					<div class="row">
					<div class="col-md-5">
					<h3>Why People Trust On JobJump?</h3>
					<p>Start working with job jump that can provide everything you need for your bight future. It gives you the opportunities to find your job. There have everything that you need. You can find all categories and all types of job.</p>
				</div>
				<div class="col-md-7">
					<div>
						<img src="img/abb.jpg" alt="">
					</div>
					</div>
				</div>

				</div>

		</div>
	 </section>



<section id="Job">
		<div class="container-fluid">
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
              		<p class="one">Full time time</p>
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
            			<p>Requirement: XYZ</p>
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
            		<p>Lorem ipsum</p>
            	</div>
              <div class="text-c mr-3 col-lg-2.5">
            		<p class="ii">
            			<i class="fa-solid fa-location-dot"></i>XYZ, Dhaka
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
              			<p class="two">Lorem ipsum</p>
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
            			<p>Requirement: XYZ</p>
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
            		<p>Lorem ipsum</p>
            	</div>
              <div class="text-c mr-3 col-lg-2.5">
            		<p class="ii">
            			<i class="fa-solid fa-location-dot"></i>XYZ, Dhaka
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
              			<p class="two">Lorem ipsum</p>
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
            			<p>Requirement: XYZ</p>
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
            		<p>Lorem ipsum</p>
            	</div>
              <div class="text-c mr-3 col-lg-2.5">
            		<p class="ii">
            			<i class="fa-solid fa-location-dot"></i>XYZ, Dhaka
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
              			<p class="two">Lorem ipsum</p>
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
            			<p>Requirement: XYZ</p>
            		</div>

            		<div class="col-lg-4">
            			<a class="app">Apply Now<i class="fa-solid fa-angles-right"></i></a>
            		</div>
            	</div>

            </div>
          </div>

				</div>
			</div>

<!-- jobs -->
     </div>
	</section>



	<section id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-lg-12">
          <div>
          	<h2>Contact Us</h2>
          </div>
					<form id="contact_form" name="contact_form" method="post">
            <div class="mb-5 row">
            <div class="col">
                <label>First Name</label>
                <input type="text" required maxlength="50" class="form-control" id="first_name" name="first_name">
            </div>
            <div class="col">
                <label>Last Name</label>
                <input type="text" required maxlength="50" class="form-control" id="last_name" name="last_name">
            </div>
            </div>
            <div class="mb-5 row">
                <div class="col">
                    <label for="email_addr">Email address</label>
                    <input type="email" required maxlength="50" class="form-control" id="email_addr" name="email"
                placeholder="name@example.com">
                </div>
                <div class="col">
                    <label for="phone_input">Phone</label>
                    <input type="tel" required maxlength="50" class="form-control" id="phone_input" name="Phone"
                placeholder="Phone">
                </div>
                </div>
                <div class="mb-5">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-dark px-4 btn-lg">Post</button>
            </form>
				</div>
      </div>
		</div>

	</section>

	<footer>
		<div class="footer">
			<div class="col-1">
				<h3>Usefull Links</h3>

				<a href="#">About</a>
				<a href="#">Services</a>
				<a href="#">Contact</a>
			</div>
			<div class="col-2">
				<h3>NewsLetter</h3>
				<form>
					<input type="text" placeholder="Your Email">
					<button type="submit">Subscripe Now </button>
			  </form>
			</div>

			<div class="col-3">
				<h3>Contact</h3>
				<p>123, zxy road, Fdh 3<<br>XZYY,XYZZ</p>
			</div>


		</div>
	</footer>





<script src="js/jquery-3.7.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


<script>
		$('.click-me').click(function(){
       $('#dropNow').toggle(1000);
		});
	</script>


</body>
</html>
