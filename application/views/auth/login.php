<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-l-50 p-r-50 p-t-20 p-b-55">
			<center><?= $this->session->flashdata('registered'); ?></center>
			<form action="<?= base_url('Auth'); ?>" method="POST" class="login100-form validate-form flex-sb flex-w">
				<span class="login100-form-title p-b-32">
					<center><a href="<?= base_url('Jdih'); ?>"><img src="<?= base_url('assets/images/Undiksha.png'); ?>" width="200px"></a></center>
					<center class="p-t-10">LOGIN - HOTEL DE LORAN</center>
				</span>

				<span class="txt1 p-b-10">
					Username
				</span>
				<div class="wrap-input100 validate-input m-b-12" data-validate="username is required">
					<input class="input100" type="text" name="username" id="username">
					<span class="focus-input100"></span>
				</div>

				<span class="txt1 p-b-10">
					Password
				</span>
				<div class="wrap-input100 validate-input m-b-30" data-validate="Password is required">
					<span class="btn-show-pass">
						<i class="fa fa-eye"></i>
					</span>
					<input class="input100" type="password" name="password" id="password">
					<span class="focus-input100"></span>
				</div>

				<div class="login100-form-title">
					<center><button class="login100-form-btn" type="submit">Login</button></center>
					<hr>
					<center><a class="txt1" href="<?= base_url() ?>auth/registration">
							Create an account?
						</a>
					</center>
				</div>

			</form>
		</div>
	</div>
</div>