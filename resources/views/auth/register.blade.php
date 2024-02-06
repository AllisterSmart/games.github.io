<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Register page</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<style type="text/css">
	.my-login-page {
    background: url('{{asset('admin/assets/img/thator5.jpg')}}') no-repeat;
    background-size: cover;
    backdrop-filter: blur(5px); /* Adjust the blur intensity as needed */
}

</style>
<body class="my-login-page">
	<section class="h-100 ">
		<div class="container h-100 ">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper" style="width: 650px;">
				
					<div class="card cardx fat mt-10">
						<div class="card-body">
							<h4 class="card-title">Register</h4>
							<form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('register') }}">

								@if ( Session::get('success'))
									 <div class="alert alert-success">
										 {{ Session::get('success') }}
									 </div>
								@endif
								@if ( Session::get('error'))
									 <div class="alert alert-danger">
										 {{ Session::get('error') }}
									 </div>
								@endif
                                @csrf
                                <div class="row">
                                	<div class="col-md-12 form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email"  placeholder="Enter email" value="{{ old('email') }}">
									<span class="text-danger">@error('email'){{ $message }}@enderror</span>
								</div>

								<div class="col-md-6 form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name"  autofocus placeholder="Enter name" value="{{ old('name') }}">
									<span class="text-danger">@error('name'){{ $message }}@enderror</span>
								</div>

                                <div class="col-md-6 form-group">
									<label for="mobile">Mobile No.</label>
									<input id="mobile" type="text" class="form-control" name="mobile" placeholder="Enter mobile no." maxlength="10" pattern="\d{10}" title="Please enter exactly 10 digits" required>
									<span class="text-danger">@error('mobile'){{ $message }}@enderror</span>
								</div>
								
								<div class="col-md-6 form-group">
									<label for="referal_code">Referal Code</label>
									<input id="referal_code" type="text" class="form-control" name="referal_code" placeholder="Enter Referal Code">
									<span class="text-danger">@error('referal_code'){{ $message }}@enderror</span>
								</div>
								
								<div class="col-md-6 form-group" style="display: none">
									<label for="user_referal_code">User Referal Code</label>
									<input id="user_referal_code" type="text" class="form-control" name="user_referal_code" placeholder="Enter Referal Code">
									<span class="text-danger">@error('user_referal_code'){{ $message }}@enderror</span>
								</div>

								<div class="col-md-6 form-group" style="display: none;">
									<label for="mobile">User Id.</label>
									<input id="mobile" type="text" class="form-control" name="user_id" value="">
									<span class="text-danger">@error('mobile'){{ $message }}@enderror</span>
								</div>

								<div class="col-md-6 form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password"  data-eye placeholder="Enter password">
									<span class="text-danger">@error('password'){{ $message }}@enderror</span>
								</div>
                                <div class="col-md-6 form-group">
									<label for="password-confirm">Confirm Password</label>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-eye placeholder="Enter confirm password">
									<span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>
                                    
								</div>
							</div>


								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="agree" id="agree" class="custom-control-input">
										<label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
										<div class="invalid-feedback">
											You must agree with our Terms and Conditions
										</div>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Register
									</button>
								</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="{{route('login')}}">Login</a>
								</div>
							</form>
						</div>
					</div>
			
				</div>
			</div>
		</div>
	</section>

<style type="text/css">
	.card{
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) !important;
	}
  /* Hide the up and down arrows for number input */
  input[type="number"]::-webkit-inner-spin-button,
  input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  input[type="number"] {
    -moz-appearance: textfield; /* Firefox */
  }
</style>

<script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>