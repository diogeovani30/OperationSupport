@extends('layouts.main')

@section('container')

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('RegisterError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('registerError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

<!DOCTYPE html>
		<html lang="en">
		<head>
			<title>Registration</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
			<link rel="icon" type="image/png" href="img/icons/favicon.ico"/>
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->	
			<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->	
			<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
			<link rel="stylesheet" type="text/css" href="css/util.css">
			<link rel="stylesheet" type="text/css" href="css/main.css">
		
		<!--===============================================================================================-->
		</head>
		<body>
			
			
				<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
					<div class="wrap-login100">
						{{-- <form action="/register" method="post" class="login100-form validate-form"> --}}
							<span class="login100-form-logo">
								<i class="ic ic-twotone-support-agent"><iconify-icon icon="mdi:account"></iconify-icon></iconify-icon></i>
							</span>
		
							<span class="login100-form-title p-b-34 p-t-27">
                Registration Form 
							</span>

<div class="row justify-content-center">
  <div class="col-lg-8">
    <main class="form-registration">
      <form action="/register" method="post" class="login100-form validate-form">
        @csrf
         <div class="wrap-input100 validate-input" class="form-floating">
          <input class="input100" type="text" name="name" class="form-control rounded-top @error('name') is-invalid" @enderror id="name" placeholder="Name" required value="{{ old('name' ) }}">
          <span class="focus-input100"></span>
             @error('Name')
              <div class="invalid-feedback">
                 {{ $message}}
              </div>
              @enderror
        </div>
        <div class="wrap-input100 validate-input" class="form-floating">
          <input class="input100" type="text" name="username" class="form-control @error('username') is-invalid" @enderror id="username" placeholder="Name" required value="{{ old('username') }}">
          <span class="focus-input100"></span>
          @error('username')
              <div class="invalid-feedback">
                 {{ $message}}
              </div>
              @enderror
        </div>
        	@csrf
								 <div  class="wrap-input100 validate-input" class="form-floating">
									<input class="input100" type="email" name="email" class="form-control @error('email') is-invalid  @enderror"  placeholder="Email">
									<span class="focus-input100"></span>
									@error('email')
									<div class="invalid-feddback">
										{{ $message }}
									</div>
									@enderror
								</div>
        <div class="wrap-input100 validate-input" class="form-floating">
          <input class="input100" type="password" name="password" class="form-control @error('password') is-invalid" @enderror id="password" placeholder="Password" required>
          @error('password')
              <div class="invalid-feedback">
                 {{ $message}}
              </div>
              @enderror
        </div>
    
        <div class="container-login100-form-btn">
          <button class="login100-form-btn"type="submit">Register </button>
        </div>
      </form>
      <small class="d-block text-center mt-3"  class="container-login100-form-btn" style="color:#ffffff;">Already Registered ? <a href="/login">Login</a></small>
    </main>
  </div>
</div>

@endsection 