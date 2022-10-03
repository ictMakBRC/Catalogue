<x-guest-layout>

    <div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5 mt-20">
									<br>
									<br>
									<div class="text-center">
										<img src="assets/images/logo.png" width="120px" alt="">
										<h3 class="mt-4 font-weight-bold d-none">Welcome Back</h3>
									</div>
                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
									<div class="login-separater text-center"> <span>LOGIN WITH EMAIL</span>
										<hr/>
									</div>
                             <form method="POST" action="{{ route('login') }}">
                                        @csrf
									<div class="form-group mt-4">
										<label>Email Address</label>
										<input type="email" name="email" :value="old('email')" required autofocus id="email" class="form-control" placeholder="Enter your email address" />
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" id="password" name="password" required autocomplete="current-password"   class="form-control" placeholder="Enter your password" />
									</div>
									<div class="form-row">
										<div class="form-group col">
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch1" name="remember" >
												<label class="custom-control-label" for="customSwitch1">Remember Me</label>
											</div>
										</div>
										<div class="form-group col text-right">
                                            @if (Route::has('password.request'))
                                            <a class="" href="{{ route('password.request') }}">
                                                <i class='bx bxs-key mr-2'></i>{{ __('Forgot your password?') }}
                                            </a>
                                        @endif

										</div>
									</div>
									<div class="btn-group mt-3 w-100">
										<button type="submit" class="btn btn-primary btn-block">Log In</button>
										<button type="submit" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
										</button>
									</div>
                             </form>
									<hr>
									<div class="text-center">
										<p class="mb-0">Don't have an account? <a href="{{url('register')}}">Sign up</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="assets/images/login-images/login-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
</x-guest-layout>
