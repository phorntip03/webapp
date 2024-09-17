@extends('layout.frontend.master')

@section('content')
<section class="user-login section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="block">
					<!-- Image -->
					<div class="image align-self-center"><img class="img-fluid" src="{{asset('asset/frontend/images/Login/sign-up.jpg')}}" alt="desk-image">
					</div>
					<!-- Content -->
					<div class="content text-center">
						<div class="logo">
							<a href="index.html"><img src="{{asset('asset/frontend/images/logo.png')}}" alt=""></a>
						</div>
						<div class="title-text">
							<h3>Sign Up for New Account</h3>
						</div>
						<form action="#">
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Your Name" required>
							<!-- Email -->
							<input class="form-control main" type="email" placeholder="Email Address" required>
							<!-- Password -->
							<input class="form-control main" type="password" placeholder="Password" required>
							<!-- Submit Button -->
							<button class="btn btn-main-md">sign up</button>
						</form>
						<div class="new-acount">
							<p>By clicking “Sign Up” I agree to <a href="privacy-policy.html">Terms of Conditions.</a></p>
							<p>Anready have an account? <a href="sign-in.html">SIGN IN</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection