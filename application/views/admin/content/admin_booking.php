<div class="container-fluid text-center" style="background-color:#14274A; height:40vh;">
    <p class="text-white fw-bold" style="font-size:30px; padding-top:20vh; ">Booking & Reservation</p>
</div>

<div class="container" style="height:max(100vh,auto); width:80vw; margin-bottom:10vh;">
    <div class="col">
        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title text-center mt-5 mb-5"> Booking List </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hovered table-bordered text-center" id="table_booking" name="table_booking">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($allBooking && count($allBooking)>0) {
                    for ($i=0; $i < count($allBooking); $i++) { 
                        echo "<tr>";
                        echo "<td>".$allBooking[$i]['name']."</td>";
                        echo "<td>".$allBooking[$i]['email']."</td>";
                        echo "<td>".$allBooking[$i]['phone']."</td>";
                        echo "<td>".$allBooking[$i]['type']."</td>";
                        echo "<td>".$allBooking[$i]['date']."</td>";
                        echo "<td>";
                        echo "<a class='btn btn-danger' href='".base_url('Welcome/deleteBooking?name='.$allBooking[$i]['name'])."' id='btn_hapus' onclick=return confirm('Apakah anda yakin menghapus data ini?');>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    }else{
                    echo "<tr>
                        <td colspan = 6>
                        <center><b><italic>
                        No Booking Data Found
                        </italic></b></center>
                        </td>
                    </tr>";
                    }
                    ?>
                </tbody>
                </table>
            </div>
            <div class="box-footer">
            </div>
            </div>
        </div>
    </div>
</div>
