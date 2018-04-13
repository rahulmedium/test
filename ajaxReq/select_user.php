<?php
error_reporting(null);
include('../class/mysql_crud.php');
//$uid = $_SESSION['id'];
$db = new Database();
$db->connect();
//$stat=$_REQUEST['id'];
//$rt = "utype" . "=" . '4 or utype=5 or utype=6';
if (isset($_REQUEST['id'])) {
     $id = $_REQUEST['id'];
    $rt = "utype" . "=" . '"' . 2 . '"' . ' and status=' . '"' . $id . '"';
}else{
     $rt = "utype" . "=" . '"' . 2 . '"';
}

$db->select('users', '*', NULL, $rt, 'id DESC');
//$db->select_single('users', '*', NULL, $rt, NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();

$i=1;

?>
   <div class="prtm-content-wrapper">
        <div class="prtm-content">
            <div class="prtm-page-bar">
                <ul class="breadcrumb">
                 
                    <li class="breadcrumb-item active">Rider</li>
                </ul>
            </div>

            <div class="prtm-block">
                <div class="col-md-3">
                      <div class="prtm-block-title mrgn-b-lg ">

                    <div classs="select-box">
                        <div class="selectbox-wrap mrgn-b-lg">
                            <div class="selectbox">
                     <select  onchange="showUser()" class="form-control" id="ac">
                            <option value=''>Select Status</option>
                            <option value='1'>Active</option>
                            <option value='0'>Block</option>
                        </select>
                            </div>
                        </div>
                    </div>
                  
                </div>
                </div>
                <div class="col-md-9">
                      <a href="rider_export.php" class="btn btn-warning" style="float:right; " role="button">Export</a>
                </div>
              
                <div class="col-md-12">
                <div class="prtm-block-content" id='rahu'>
                    <div class="table-responsive" >
                        <table id="example" class="table table-bordered display" cellspacing="0" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Rider Name</th>
                                    <th>Email</th>
                                    <th>Sign Up Date</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Total Ride</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $i; foreach($res as $value){ //print_r($value);
                                $id=$value['id'];
                                $rt = "login_id" . "=" . '"'.$id.'"';

                            $db->select_single('rider_book', 'count(*) as count', NULL, $rt, 'id DESC');
                            //$db->select_single('users', '*', NULL, $rt, NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
                            $res = $db->getResult();
                                $ride_count=$res['count'];
                                
                                ?>
                               <tr>
                                   <td><?php echo $i ;?></td>
                                   <td><a href='rider_profile.php?id=<?php echo $value['id'] ?>'><?php echo $value['fname'] ;?></a></td>
                                       <td><?php echo $value['email'] ;?></td>
                                         <td><?php echo date('m/d/Y',  $value['created']);
?></td>
                                           <td><?php echo $value['phone'] ;?></td>
                                             <td><?php
                        if ($value['status'] == 1) {
                            echo 'Active';
                        } else {
                            echo 'Block';
                        }
    ?></td>
                                             <td><center><a href='trip.php?id=<?php echo $value['id'] ?>'><?php echo $ride_count ;?></a></center></td>
								
                                </tr>
                                <?php $i++;} ?>
                                </div>
                           
                                       <script>
                // active script start
                $(function () {
                    $("#active<?php echo $value['id']; ?>").click(function (e) { //alert('hi');
                      e.preventDefault();
                        var del_id = "<?php echo $value['id']; ?>"; //alert(del_id);
                        if (confirm('Are you sure you want to active this rider?')) {
                            $.ajax({
                                type: "POST",
                                url: "ajaxReq/usern_active.php",
                                data: {id: del_id,status:1},
                                success: function (data) {
//alert(data);
                                    if ($.trim(data.status) === "1") {
                                        window.location.href = "rider.php";
                                    } else {
                                        $("#sbcrbmsg").text("Already created user for this email,Please choose another email").css("color", "red");
                                        $('#users')[0].reset();

                                    }
                                }
                            });

                        }
                    });
                });
                // active script end
            </script>
                 
           