<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-50 p-r-50 p-t-20 p-b-55">
            <form action="<?= base_url('auth/registration'); ?>" method="POST" class="login100-form validate-form flex-sb flex-w">
                <span class="login100-form-title p-b-32">
                    <center><img src="<?= base_url('assets/images/Undiksha.png'); ?>" width="200px"></center>
                    <center class="p-t-10">CREATE AN ACCOUNT!</center>
                </span>

                <!-- <span class="txt1 p-b-5">
                    Username
                </span> -->
                <div class="wrap-input100 validate-input m-b-12" data-validate="Name is required">
                    <input class="input100" type="text" name="name" id="name" placeholder="Name" value="<?= set_value('name'); ?>">
                    <span class="focus-input100"></span>
                    <?= form_error('name', '<small class="p-l-5 txt1 text-danger">', '</small>'); ?>
                </div>


                <div class="wrap-input100 validate-input m-b-30" data-validate="username is required">
                    <input class="input100" type="text" name="username" id="username" placeholder="username" value="<?= set_value('username'); ?>">
                    <span class="focus-input100"></span>
                    <?= form_error('username', '<small class="p-l-5 txt1 text-danger">', '</small>'); ?>
                </div>


                <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password1" id="password1" placeholder="Password">
                    <span class="focus-input100"></span>
                    <?= form_error('password1', '<small class="p-l-5 txt1 text-danger">', '</small>'); ?>
                </div>


                <div class="wrap-input100 validate-input m-b-30" data-validate="Repeat Password is required">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye"></i>
                    </span>
                    <input class="input100" type="password" name="password2" id="password2" placeholder="Repeat Password">
                    <span class="focus-input100"></span>
                </div>

                <div class="login100-form-title">
                    <center><button class=" login100-form-btn center-block" type="submit">Registration</button></center>
                    <hr>
                    <center><a class="txt1" href="<?= base_url() ?>auth">
                            Already have an account? Login!
                        </a>
                    </center>
                </div>

            </form>
        </div>
    </div>
</div>