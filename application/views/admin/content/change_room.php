<div class="container-fluid text-center" style="background-color:#14274A; height:40vh;">
    <p class="text-white fw-bold" style="font-size:30px; padding-top:20vh; ">Change Apartment Room</p>
</div>

<div class="container" style="height:max(100vh,auto); width:50vw; margin-bottom:10vh;">
    <p style="font-size:30px; padding-top:15vh; color:#14274A;">Please fill out the form below to change apartment room details</p>
    
        <form id="form_daftar" name="form_daftar" method="POST" action="<?php echo base_url()?>Welcome/change_room">
            <div class="form-group">
                <label for="type"> Type : </label>
                <input class="form-control" type="text" name="type" id="type" value="<?= $type;?>" disabled>
                <input class="form-control" type="text" name="type" id="type" value="<?= $type;?>" hidden required> <br>
            </div>
            <div class="form-group">
                <label for="stock"> Stock : </label>
                <input class="form-control" type="number" min="0" name="stock" id="stock" value="<?= $stock;?>" required><br>
            </div>
            <div class="form-group">
                <label for="price"> Price : </label>
                <input class="form-control" type="text" name="price" id="price" value="<?= $price;?>" required><br>
            </div>
            <div class="form-group">
                <label for="living"> Living Room : </label>
                <input class="form-control" type="number" min="0" name="living" id="living" value="<?= $living;?>" required><br>
            </div>

            <div class="form-group">
                <label for="kitchen"> Kitchen : </label>
                <input class="form-control" type="number" min="0" name="kitchen" id="kitchen" value="<?= $kitchen;?>" required><br>
            </div>

            <div class="form-group">
                <label for="bedroom"> Bedroom : </label>
                <input class="form-control" type="number" min="0" name="bedroom" id="bedroom" value="<?= $bedroom;?>" required><br>
            </div>
            
            <div class="form-group">
                <label for="bathroom"> Bathroom : </label>
                <input class="form-control" type="number" min="0" name="bathroom" id="bathroom" value="<?= $bathroom;?>" required><br>
            </div>
            
            <br>
            <button class="btn mb-5 text-white" id="bt_login" name="bt_login" type="submit" style="float:right; background-color:#E0B973;">Submit</button>
        </form>

</div>
