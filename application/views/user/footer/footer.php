<div class="text-white" style="background-color:#14274A; font-family:Montserrat;">
    <footer class="container" style="padding-top:1%; padding-bottom:1%;">
        <div class="mt-1 row row-cols-4" >
            <div class="col-3">
                <p style="font-size:25px; font-family:Garamond; margin-bottom:-10px; margin-left:2%;">ROYAL <br> <p style="font-size:15px; font-family:Garamond; margin-bottom:-30px;">APARTMENT</p></p><br>
                <p style="font-size:14px;">497 Evergreen Rd. Roseville, CA 95673 <br>+44 345 678 903 <br>royal_apartment@gmail.com</p>
            </div>
            <div class="col-3">
                <a class="nav-link" style="font-size:14px; margin-bottom:-10px; text-decoration:none; color:white;" href="<?php echo base_url()?>Welcome/about">About Us</a><br>
                <a class="nav-link" style="font-size:14px; margin-bottom:-10px; text-decoration:none; color:white; margin-top:-16px;" href="<?php echo base_url()?>Welcome/contact" >Contact</a><br>
                <a class="nav-link" style="font-size:14px; text-decoration:none; color:white; margin-top:-16px;" href="<?php echo base_url()?>Welcome/terms">Terms & Policy</a>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-1"><img src="<?php echo base_url()?>asset/facebook.png" style="margin-top:-8px; width:18px;" alt=""></div>
                    <div class="col"><p style="font-size:14px; margin-bottom:-10px;">Royal Apartment</p><br></div>
                </div>
                <div class="row">
                    <div class="col-1"><img src="<?php echo base_url()?>asset/instagram.png" style="margin-top:-8px; width:18px;" alt=""></div>
                    <div class="col"><p style="font-size:14px; margin-bottom:-10px;">@royal_apartment</p><br></div>
                </div>
                <div class="row">
                    <div class="col-1"><img src="<?php echo base_url()?>asset/twitter.png" style="margin-top:-8px; width:18px;" alt=""></div>
                    <div class="col"><p style="font-size:14px; margin-bottom:-10px;">royal_apartment</p><br></div>
                </div>
            </div>
            <div class="col-3">
                <form id="form_subscribe" name="form_subscribe" method="POST" action="<?php echo base_url()?>Welcome/subscribe">
                <p href="#">Subscribe to our newsletter</p>
                <div class="input-group">
                    <input id="emailSubscribe" name="emailSubscribe" class="form-control rounded-0 border-3 text-white" style="background-color:#14274A; border-color:#E0B973; color:#E0B973;" type="search" placeholder="E-mail Address" aria-label="Search">
                    <button id="btnSubscribe" name="btnSubscribe" type="submit" class="input-group-text rounded-0 border-0" style="background-color:#E0B973;" >OK</button>
                </div>
                </form>
            </div>
        </div>
    </footer>
</div>