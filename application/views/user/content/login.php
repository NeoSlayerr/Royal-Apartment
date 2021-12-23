<div class="container-fluid">
    <div class="row">
        <div class="col" style="margin:0; padding:0;">
            <img style="width:100%; height:100vh; object-fit: cover;" src="<?php echo base_url()?>asset/login.jpg" alt="">
        </div>
        <div class="col" style="margin:0; padding:0;">
            <div class="container" style="margin-top:25vh;">
                <h3>Welcome back</h3>
                <h2>Login to your account</h2>
                <form id="form_login" name="form_login" method="POST" action="<?php echo base_url()?>Welcome/cek_login">
                    <div class="form-group">
                        <label for="username"> Username : </label>
                        <input class="form-control" type="text" name="username" id="username" required> <br>
                    </div>

                    <div class="form-group">
                        <label for="password"> Password : </label>
                        <input class="form-control" type="password" name="password" id="password" required> <br>
                    </div>
                    <h5 style="float:right;"><a href="<?php echo base_url()?>Welcome/forgot" style="text-decoration:none; color:#E0B973;">Forgot Password?</a></h5>
                    <br>
                    <button class="btn mb-5 text-white" id="bt_login" name="bt_login" type="submit" style=" background-color:#E0B973;">Login</button>
                    <a class="btn btn-danger mb-5 text-white" href="<?php echo base_url()?>Welcome/index" >Cancel</a>
                </form>
                <h5>Don't have an account? <a href="<?php echo base_url()?>Welcome/signup" style="text-decoration:none; color:#E0B973;">Join free today</a></h5>
            </div>
        </div>
    </div>
</div>
