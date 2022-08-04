<x-guest-layout>

    <div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center">
			<div class="card shadow-lg forgot-box">
				<div class="card-body p-md-5">
					<div class="text-center">
						<img src="assets/images/icons/forgot-2.png" width="140" alt="" />
					</div>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
					<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
					<p class="text-muted"> {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
				<form method="POST" action="{{ route('password.email') }}">
                        @csrf
                    <div class="form-group mt-5">
						<label>Email id</label>
						<input id="email" type="email" name="email" :value="old('email')" required autofocus class="form-control form-control-lg radius-30" placeholder="example@user.com" />
					</div>
					<button type="submit" class="btn btn-primary btn-lg btn-block radius-30">Send</button> <a href="{{ route('login') }}" class="btn btn-link btn-block"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
				</form>
                </div>
			</div>
		</div>
	</div>
</x-guest-layout>
