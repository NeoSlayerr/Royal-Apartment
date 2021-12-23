<div class="container-fluid">
    <div class="row">
        <div class="col" style="margin:0; padding:0;">
            <img style="width:100%; height:100vh; object-fit: cover;" src="<?php echo base_url()?>asset/forgot.jpg" alt="">
        </div>
        <div class="col" style="margin:0; padding:0;">
            <div class="container" style="margin-top:35vh;">
                <h2 class="pb-2">Forgot Password</h3>
                <h3 class="pb-2">We will send link for reset password to your email</h2>
                <form id="form_login" name="form_login" method="POST" action="<?php echo base_url()?>Welcome/forgot1">
                    <div class="form-group">
                        <label for="email"> Email Address: </label>
                        <input class="form-control" type="email" name="email" id="email" required> <br>
                    </div>

                    <button class="btn mb-5 text-white" id="bt_login" name="bt_login" type="submit" style=" background-color:#E0B973;">Validate</button>
                    <a class="btn btn-danger mb-5 text-white" href="<?php echo base_url()?>Welcome/index" >Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
