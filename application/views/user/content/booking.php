<div class="container-fluid text-center" style="background-color:#14274A; height:40vh;">
    <p class="text-white fw-bold" style="font-size:30px; padding-top:20vh; ">Booking & Reservation</p>
</div>

<div class="container" style="height:max(100vh,auto); width:50vw; margin-bottom:10vh;">
    <p style="font-size:30px; padding-top:15vh; color:#14274A;">Please fill out the form below to book our rooms</p>
    
        <form id="form_daftar" name="form_daftar" method="POST" action="<?php echo base_url()?>Welcome/book_room">
            <div class="form-group">
                <label for="name"> Name : </label>
                <input class="form-control" type="text" name="name" id="name" required> <br>
            </div>
            <div class="form-group">
                <label for="email"> Email Address : </label>
                <input class="form-control" type="email" name="email" id="email" required><br>
            </div>
            <div class="form-group">
                <label for="phone"> Phone Number : </label>
                <input class="form-control" type="tel" name="phone" id="phone" placeholder="0712-345-6789" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" required> <br>
            </div>
            <div class="form-group">
                <label for="type"> Apartment Type : </label><br>
                <select id="type" name="type" class="form-select" required>
                    <?php foreach ($type as $t) { ?>
                        <option value="<?=$t['type']?>"> <?=$t['type']?> </option>
                    <?php } ?>
                </select>
                
            </div>
            <br>
            <div class="form-group">
                <label for="date"> Reservation Date : </label><br>
                <input class="datepicker" type="date" name="date" id="date" min="" required>
                <br>
            </div>

            
            <br>
            <button class="btn mb-5 text-white" id="bt_login" name="bt_login" type="submit" style="float:right; background-color:#E0B973;">Submit</button>
        </form>

</div>
