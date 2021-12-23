<div>
    <div id="body">
        <img style="width:100%; height:100vh; opacity:0.5; object-fit: cover;" src="<?php echo base_url()?>asset/apartment.jpg" alt="">
    </div>
    <div class="text-white" style="position:absolute; top:20%; left:8%;">
        <p style="font-size:48px; margin-bottom:-60px;"> WELCOME TO </p><br>
        <p class="fw-bold" style="font-size:100px; font-family:Garamond; margin-bottom:-60px;"> ROYAL </p><br>
        <h2 class="fw-bold" style="font-size:55px; font-family:Garamond; margin-bottom:-30px;"> APARTMENT </h2><br>
        <p style="font-size:22px; margin-bottom:-30px;"> Rent your apartment and enjoy Luxury </p><br>
        <p style="font-size:22px; margin-bottom:-30px;"> redefined at the most affordable rates.</p>
    </div>
    <div class="text-white" style="position:absolute; bottom:20%; left:47%">
    <a class="btn text-white fw-bold p-2" style="background-color:#E0B973; width:auto;" href="<?php echo base_url()?>Welcome/booking">BOOK NOW</a>
    </div>
    <div class="text-white" style="position:absolute; bottom:3%; left:48.5%">
        <p class="fw-bold" style="font-size:18px;">SCROLL</p>
        <button class="btn"><img style="width:40px; margin-top:-20%;" src="<?php echo base_url()?>asset/scroll.png" alt=""></button>
    </div>
</div>

<div class="container mt-5 mb-5" style="margin:0 auto; color:#14274A;">
    <h1 class="text-center mb-4 fw-bold">ROOMS AND RATES</h1>
    <h5 class="text-center mb-5">
        Each of our bright, light-flooded rooms come with everything you could possibly need for a comfortable stay. And yes, 
        comfort isn’t our only objective, we also value good design, sleek contemporary furnishing complemented 
        by the rich tones of nature’s palette as visible from our rooms’ outdoor-view windows and terraces. 
    </h5>
    <div class="container">
        <div class="mt-5">
            <div class="card mx-auto col-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators top-100" style="margin-top:-30px;">
                <li style="width:12px; height:12px; margin-left:3%;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Slide 1"></li>
                <li style="width:12px; height:12px; margin-left:3%;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="rounded-circle" aria-label="Slide 2"></li>
                <li style="width:12px; height:12px; margin-left:3%;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="rounded-circle" aria-label="Slide 3"></li>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url()?>asset/living-room-1.jpg" class="w-100" style="height:400px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url()?>asset/kitchen-1.jpg" class="w-100" style="height:400px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url()?>asset/bedroom-1.jpg" class="w-100" style="height:400px;" alt="...">
                </div>
                </div>
            </div>
            <div style="background-color:#14274A;" class="text-center">
                <p class="text-white mt-3">Apartment Type A</p>
            </div>
            <div class="container text-center border-1" style="height:20%; border-color:blue;">
                <div class="accordion accordion-flush" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header row" id="headingOne">
                    <div class="col mt-4 mb-4" style="font-size:4px; width:70%;">
                        <div class="row">
                            <div class="col-2 ms-4 " style="width:auto; font-size:4px;">
                                <button style=" background-color:#E0B973;" class="card-header collapsed card-link border-0 rounded-circle text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-plus fa-xl mt-2 mb-2" style="font-size:10px;"></i>
                                </button>
                            </div>
                            <div class="col mt-3" style="width:60%;">
                                <p style="font-size:2.5em; float:left;">VIEW DETAILS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4 mb-4 ms-5" style="width:10%" >
                        <a class="btn text-white" style="background-color:#E0B973; float:right; margin-right:20px;" href="<?php echo base_url()?>Welcome/booking"><?php echo $p1;?>/year</a>
                        <a class="btn text-white" style="background-color:#14274A; float:right; margin-right:20px;" href="<?php echo base_url()?>Welcome/room/A">Change</a>
                    </div>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/livingroom.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $living1;?> Living Room</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/kitchen.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $kitchen1;?> Kitchen</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/bedroom.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $bedroom1;?> Bedroom</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/bathroom.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $bathroom1;?> Bathroom</h5>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6">
                                <h5 style="padding-top:90px;">Remaining : <?php echo $a2;?> </h5>
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card mx-auto col-6">
            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators top-100" style="margin-top:-30px;">
                <li style="width:12px; height:12px; margin-left:3%;" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Slide 1"></li>
                <li style="width:12px; height:12px; margin-left:3%;" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" class="rounded-circle" aria-label="Slide 2"></li>
                <li style="width:12px; height:12px; margin-left:3%;" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" class="rounded-circle" aria-label="Slide 3"></li>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url()?>asset/living-room-2.jpg" class="w-100" style="height:400px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url()?>asset/kitchen-2.jpg" class="w-100" style="height:400px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url()?>asset/bedroom-2.jpg" class="w-100" style="height:400px;" alt="...">
                </div>
                </div>
            </div>
            <div style="background-color:#14274A;" class="text-center">
                <p class="text-white mt-3">Apartment Type B</p>
            </div>
            <div class="container text-center border-1" style="height:20%; border-color:blue;">
                <div class="accordion accordion-flush" id="accordionExample2">
                <div class="accordion-item">
                    <h2 class="accordion-header row" id="headingOne">
                    <div class="col mt-4 mb-4" style="font-size:4px; width:70%;">
                        <div class="row">
                            <div class="col-2 ms-4 " style="width:auto; font-size:4px;">
                                <button style=" background-color:#E0B973;" class="card-header collapsed card-link border-0 rounded-circle text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-plus fa-xl mt-2 mb-2" style="font-size:10px;"></i>
                                </button>
                            </div>
                            <div class="col mt-3" style="width:60%;">
                                <p style="font-size:2.5em; float:left;">VIEW DETAILS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4 mb-4 ms-5" style="width:10%" >
                        <a class="btn text-white" style="background-color:#E0B973; float:right; margin-right:20px;" href="<?php echo base_url()?>Welcome/booking"><?php echo $p2;?>/year</a>
                        <a class="btn text-white" style="background-color:#14274A; float:right; margin-right:20px;" href="<?php echo base_url()?>Welcome//room/B">Change</a>
                    </div>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/livingroom.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $living2;?> Living Room</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/kitchen.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $kitchen2;?> Kitchen</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/bedroom.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $bedroom2;?> Bedroom</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/bathroom.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $bathroom2;?> Bathroom</h5>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6">
                                <h5 style="padding-top:90px; ">Remaining : <?php echo $b2;?> </h5>
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="card mx-auto col-6">
            <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators top-100" style="margin-top:-30px;">
                <li style="width:12px; height:12px; margin-left:3%;" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Slide 1"></li>
                <li style="width:12px; height:12px; margin-left:3%;" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" class="rounded-circle" aria-label="Slide 2"></li>
                <li style="width:12px; height:12px; margin-left:3%;" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" class="rounded-circle" aria-label="Slide 3"></li>
                </div>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo base_url()?>asset/living-room-3.jpg" class="w-100" style="height:400px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url()?>asset/kitchen-3.jpg" class="w-100" style="height:400px;" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url()?>asset/bedroom-3.jpg" class="w-100" style="height:400px;" alt="...">
                </div>
                </div>
            </div>
            <div style="background-color:#14274A;" class="text-center">
                <p class="text-white mt-3">Apartment Type C</p>
            </div>
            <div class="container text-center border-1" style="height:20%; border-color:blue;">
                <div class="accordion accordion-flush" id="accordionExample3">
                <div class="accordion-item">
                    <h2 class="accordion-header row" id="headingOne">
                    <div class="col mt-4 mb-4" style="font-size:4px; width:70%;">
                        <div class="row">
                            <div class="col-2 ms-4 " style="width:auto; font-size:4px;">
                                <button style=" background-color:#E0B973;" class="card-header collapsed card-link border-0 rounded-circle text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fas fa-plus fa-xl mt-2 mb-2" style="font-size:10px;"></i>
                                </button>
                            </div>
                            <div class="col mt-3" style="width:60%;">
                                <p style="font-size:2.5em; float:left;">VIEW DETAILS</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mt-4 mb-4 ms-5" style="width:10%" >
                        <a class="btn text-white" style="background-color:#E0B973; float:right; margin-right:20px;" href="<?php echo base_url()?>Welcome/booking"><?php echo $p3;?>/year</a>
                        <a class="btn text-white" style="background-color:#14274A; float:right; margin-right:20px;" href="<?php echo base_url()?>Welcome/room/C">Change</a>
                    </div>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample3">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/livingroom.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $living3;?> Living Room</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/kitchen.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $kitchen3;?> Kitchen</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/bedroom.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $bedroom3;?> Bedroom</h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo base_url()?>asset/bathroom.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="col-6" style="width:80%;">
                                        <h5 class="font" style="padding-top:20px; float:left; padding-left:15px;"><?php echo $bathroom3;?> Bathroom</h5>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6">
                                <h5 style="padding-top:90px;">Remaining : <?php echo $c2;?></h5>
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        
    </div>
</div>

