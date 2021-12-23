<div class="container-fluid text-center" style="background-color:#14274A; height:40vh;">
    <p class="text-white fw-bold" style="font-size:30px; padding-top:20vh; ">Feedback & Subscribe List</p>
</div>

<div class="container" style="height:max(100vh,auto); width:80vw; margin-bottom:10vh;">
    <div class="col">
        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title text-center mt-5 mb-5"> Feedback List </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hovered table-bordered text-center" id="table_contact" name="table_booking">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($allContact && count($allContact)>0) {
                    for ($i=0; $i < count($allContact); $i++) { 
                        echo "<tr>";
                        echo "<td>".$allContact[$i]['id']."</td>";
                        echo "<td>".$allContact[$i]['name']."</td>";
                        echo "<td>".$allContact[$i]['email']."</td>";
                        echo "<td>".$allContact[$i]['message']."</td>";
                        echo "<td>";
                        echo "<a class='btn btn-danger' href='".base_url('Welcome/deleteContact?id='.$allContact[$i]['id'])."' id='btn_hapus' onclick=return confirm('Apakah anda yakin menghapus data ini?');>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    }else{
                    echo "<tr>
                        <td colspan = 6>
                        <center><b><italic>
                        No Feedback Data Found
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

<div class="container" style="height:max(100vh,auto); width:80vw; margin-bottom:10vh;">
    <div class="col">
        <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title text-center mt-5 mb-5"> Subscribe List </h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-hovered table-bordered text-center" id="table_subscribe" name="table_subscribe">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($allSubscribe && count($allSubscribe)>0) {
                    for ($i=0; $i < count($allSubscribe); $i++) { 
                        echo "<tr>";
                        echo "<td>".($i+1)."</td>";
                        echo "<td>".$allSubscribe[$i]['email']."</td>";
                        echo "<td>";
                        echo "<a class='btn btn-danger' href='".base_url('Welcome/deleteSubscribe?email='.$allSubscribe[$i]['email'])."' id='btn_hapus' onclick=return confirm('Apakah anda yakin menghapus data ini?');>Delete</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    }else{
                    echo "<tr>
                        <td colspan = 6>
                        <center><b><italic>
                        No Subscribe Data Found
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
