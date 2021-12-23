<div class="container-fluid">
    <div class="row">
        <div class="col" style="margin:0; padding:0;">
            <img style="width:100%; height:100vh; object-fit: cover;" src="<?php echo base_url()?>asset/signup.jpg" alt="">
        </div>
        <div class="col" style="margin:0; padding:0;">
            <div class="container" style="margin-top:10vh;">
                <h3>Welcome </h3>
                <h2>Sign up now</h2>
                <form id="form_login" name="form_login" method="POST" action="<?php echo base_url()?>Welcome/register">
                    <div class="form-group">
                        <label for="username"> Username : </label>
                        <input class="form-control" type="text" name="username" id="username" required> <br>
                    </div>

                    <div class="form-group">
                        <label for="email"> Email : </label>
                        <input class="form-control" type="text" name="email" id="email" required> <br>
                    </div>

                    <div class="form-group">
                        <label for="password"> Password : </label>
                        <input class="form-control" type="password" name="password" id="password" required> <br>
                    </div>

                    <div class="form-group">
                        <label for="password2"> Confirm Password : </label>
                        <input class="form-control" type="password" name="password2" id="password2" required> <br>
                    </div>
                    <br>
                    <button class="btn mb-5 text-white" id="bt_login" name="bt_login" type="submit" style=" background-color:#E0B973;">Sign Up</button>
                    <a class="btn btn-danger mb-5 text-white" href="<?php echo base_url()?>Welcome/index" >Cancel</a>
                </form>
                <h5>Already have an account? <a href="<?php echo base_url()?>Welcome/login" style="text-decoration:none; color:#E0B973;">Login Now</a></h5>
            </div>
        </div>
    </div>
</div>

