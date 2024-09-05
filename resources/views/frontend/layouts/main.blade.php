<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Job Jump</title>

	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/auth.css')}}"> --}}

</head>
<body>

@include('frontend.layouts.partial.header')




@yield('content')




@include('frontend.layouts.partial.footer')

<script src="{{asset('js/jquery-3.7.1.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>



<script>
    $('.click-me').click(function(){
   $('#dropNow').toggle(1000);
    });

// log in js start----
    document.querySelector("#show-login").addEventListener("click",function(){
        document.querySelector(".loginform").classList.add("active");
    });

document.querySelector("loginform .cross").addEventListener("click",function(){
        document.querySelector(".loginform").classList.remove("active");
    });

// log in js end----


</script>

</body>
</html>
