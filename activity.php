<?php 
error_reporting(0);

include('class/mysql_crud.php');
include('include/header.php'); 
$db = new Database();
$conn=$db->connect();
$uid = $_REQUEST['uid'];
require "vendor/autoload.php";
use Intercom\IntercomClient;
                                                                                                           
$client = new IntercomClient('dG9rOjRiYzBiYjM0X2E3YmZfNDQwMV9hMmYxXzExMmFkYzZkNGM3MjoxOjA=', null);
?>
<?php



//echo '<pre>';
//print_r($events);

  //$rt = "user_id" . "=" . '"' . $uid . '"';
  //$table = 'api_logger';
//$db->select('api_logger', '*', NULL, $rt);
//$res = $db->getResult();
 // print_r($res1);

       //print_r( $res);
?>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>

 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

        <div id="wrapper">
	<?php include('include/sidebar.php'); ?>
       
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <ol class="breadcrumb text-xs">
                            <li><a href="dashboard.php">Home</a></li>
                            <li class="active">users</li>
                        </ol>

                        <div class="panel panel-primary">
                            <div class="panel-body">
                                <h5 class="text-uppercase margin-none"><i class="fa fa-users"></i> Users</h5>
                               <!-- <p class="text-muted text-xs margin-none">Application UI Elements</p>-->
                                 <div class="pull-right">
                           <button type="button" id="btnExport"  class="btn btn-primary"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Export</button>
                                 </div>
                                 </div>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
               <?php 
try{
$events = $client->events->getEvents(["user_id" =>  $uid]);
 $events->type; ?>			   
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                                 Total Activity:<?php echo count($events->events); ?>
                                 
                               
								
				
                            
                           </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive"  id="table_wrapper">
                                    <table id="example" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                              
                                                <th>#</th>
                                                <th>Activity List</th>
                                                
                                                 <th>Log Date</th>
                                               
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=1;
											foreach ($events->events as $event) { 
											$rt = "intercom_event_id" . "=" . '"' . $event->id . '"';
											$db->select_single("user_event", '*', NULL, $rt, 'id DESC'); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
											$res = $db->getResult();
											if(count($res)<1){
											  $meta_value=json_encode($event->metadata);
												$event_data = array(
													'intercom_event_id' => $event->id,
													'user_id'=>$event->user_id,
													'event_name' => $event->event_name,
													'intercom_user_id' => $event->intercom_user_id,
													'created_at' => $event->created_at,
													
												);
												 $meta_data = array(
													'event_id' => $event->id,
													'metadata'=>$meta_value,
													
													
												);
											
												
												//echo $er='INSERT INTO `user_event_metadata` (`event_id`, `metadata`) VALUES ('.$event->id.', '.$meta_value.')';
											//print_r($meta_data);
											
											$db->insert("user_event", $event_data);  // Table name, column names and respective values
											$res = $db->getResult();
											 $id=$res[0];
											
											if($meta_value!="{}"){
												$con=mysqli_connect("localhost","root","","airwhizz");
											// Check connection
											if (mysqli_connect_errno())
												  {
												  echo "Failed to connect to MySQL: " . mysqli_connect_error();
												  }
												  $sql = "INSERT INTO user_event_metadata ( event_id,intercom_event_id,metadata) VALUES ('$id','$event->id','$meta_value')";
												  
												  $er=mysqli_query($con,$sql);
												 
												  mysqli_close($conn);
											//$db->insert("user_event_metadata", $meta_data);	
											}
											}
											//print_r($res);
											
											?>
										<tr>
                                                <td><?php echo $i; ?></td>
                                                <td><a href="#"><?php echo $event->event_name; ?></a></td>
                                                <td><?php echo date('m/d/y h:i:s',$event->created_at) ; ?></td>
                                                
                                                
                                               
                                            </tr>	
											
   <?php  //print "id:".$event->id." name:".$event->event_name."\n";
	//echo $event->event_name;
$i++;}
                                            
                                                ?>
                                     
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-6 -->
                    
                </div>
                <!-- /.row -->
               
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
<!-- Trigger the modal with a button -->
<?php 
} catch (Exception $e) {
//print_r(get_class_methods($e));
$error_code = $e->getCode();
if ($error_code == 404):
echo 'No Event yet';
//echo "ERROR : " . $error_code;
else:
endif;
$return_data['data']['error'] = $error_code . ' - User Not Found';
$return_data['data']['user_id'] = 0;
}
?>


<?php include('include/footer.php'); ?>
  <script>
                $(document).ready(function () {
                    //alert('fdsf');

                    $('#example').dataTable({
                        "bInfo": false,

                        "bLengthChange": false,

                    });
                    $(".entypo-export").click(function () {
                        $(".social").toggle();
                    });
                });
            </script>
     <script>
   $(document).ready(function() {
  $("#btnExport").click(function(e) {
    e.preventDefault();

    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('table_wrapper');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');

    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'user_report_' + Math.floor((Math.random() * 9999999) + 1000000) + '.xls';
    a.click();
  });
});
 

</script>  
 <script>
 $(function () {

$("#export").click(function(){ 
alert('dg');
var selected_values = $("input[name='id[]']:checked"); //alert(JSON.stringify(selected_values));
var rt=selected_values.toString();
  var data = $('input:checkbox:checked').map(function(){
 return this.value;
  }).get(data);

  var dataString =  data;
  if(dataString!= ''){
var dataString =  data;
var myAjaxUrl="user_export.php";
$table="user";
window.location.href = "fms_user_export.php?reg_info=" + dataString+'&ty='+$table;
     // alert('exported sucessfully');
  }else{
      alert('Please select at least one checkbox'); 
  }


});
});
</script>
<!-- Dynamic search data script -->



   
