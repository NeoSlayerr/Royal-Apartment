<div class="container-fluid text-center" style="background-color:#14274A; height:40vh;">
    <p class="text-white fw-bold" style="font-size:30px; padding-top:20vh; ">CONTACT US</p>
</div>

<div class="container" style="height:max(100vh,auto); margin-bottom:10vh;">
    <p style="font-size:30px; padding-top:15vh; color:#14274A;">WE ARE HERE FOR YOU</p>
    <p style="font-size:20px; color:#14274A;"> At Royal Apartment, we take our customers seriously. Do you have any enquiries, complaints or requests, 
        please forward it to our support desk and we will get back to you as soon as possible.
    </p>
    <div class="row" style="padding-top:8vh;">
        <div class="col">
            <p style="font-size:20px;color:#14274A;">497 Evergreen Rd. Roseville, <br>CA 95673 <br>Phone : +44 345 678 903 <br>Email : royal_apartment@gmail.com</p>
        </div>
        <div class="col-4" style="color:#14274A;">
            <form id="form_daftar" name="form_daftar" method="POST" action="<?php echo base_url()?>Welcome/form_contact">
                <div class="form-group">
                    <label for="name"> Name : </label>
                    <input class="form-control" type="text" name="name" id="name" required> <br>
                </div>
                <div class="form-group">
                    <label for="email"> Email Address : </label>
                    <input class="form-control" type="email" name="email" id="email" required><br>
                </div>
                <div class="form-group">
                    <label for="message"> Message : </label>
                    <textarea class="form-control" name="message" id="message" rows="3" required> </textarea><br>
                </div>
                <br>
                <button class="btn mb-5 text-white" id="bt_login" name="bt_login" type="submit" style="float:right; background-color:#E0B973;">Submit</button>
            </form>
        </div>
    </div>
</div>

