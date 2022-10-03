<x-guest-layout>

    <div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div>
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<br>
									<div class="text-center">
										<img src="assets/images/logo.png" width="120px" alt="">
									</div>

                                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

									<div class="login-separater text-center"> <span>Create an account</span>
										<hr/>
									</div>
                                 <form method="POST" action="{{ route('register') }}">
                                        @csrf
									<div class="form-group mt-1">
										<label>Email Address</label>
										<input type="email" type="email" name="email" :value="old('email')" required id="email" class="form-control" placeholder="example@user.com" autofocus/>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>Frist Name</label>
											<input type="text" name="name" :value="old('name')" required class="form-control" placeholder="Kato" />
										</div>
										<div class="form-group col-md-6">
											<label>Last Name</label>
											<input type="text" name="other_names" :value="old('other_names')" required class="form-control" placeholder="James" />
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label>Password</label>
											<div class="input-group" id="show_hide_password">
												<input class="form-control border-right-0" type="password"   name="password"  id="password" required autocomplete="new-password">
												<div class="input-group-append">	<a href="javascript:;" class="input-group-text bg-transparent border-left-0"><i class='bx bx-hide'></i></a>
												</div>
											</div>
										</div>
										<div class="form-group col-md-6">
											<label>Confirm Password</label>
											<div class="input-group" id="show_hide_password2">
												<input class="form-control border-right-0" type="password" id="password_confirmation" name="password_confirmation" required >
												<div class="input-group-append">	<a href="javascript:;" class="input-group-text bg-transparent border-left-0"><i class='bx bx-hide'></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck1" required>
											<label class="custom-control-label" for="customCheck1">I read and agree to <a href="#">Terms & Conditions</a></label>
										</div>
									</div>
									<div class="btn-group mt-3 w-100">
										<button type="submit" class="btn btn-primary btn-block">Register</button>
										<button type="submit" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
										</button>
									</div>
                                 </form>
									<hr/>
									<div class="text-center mt-4">
										<p class="mb-0">Already have an account? <a  href="{{ route('login') }}">Login</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="assets/images/login-images/register-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
</x-guest-layout>
