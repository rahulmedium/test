<?php 
error_reporting(0);

include('class/mysql_crud.php');
include('include/header.php'); 
$db = new Database();
$db->connect();
  $db = new Database();
  $db->connect(); //echo $email;
  //$rt = "user_type" . "=" . '2';
  $table = 'users';
  $db->select('users', '*', NULL, NULL, 'id desc','1000');
  $res = $db->getResult();
  // print_r( $res);
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
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                           <div class="panel-heading">
                            
                                 
                               
								
				
                            
                           </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive"  id="table_wrapper">
                                    <table id="example" class="table table-striped table-bordered table-hover">
                                         <thead>
                                            <tr>
                                              
                                                <th>#</th>
                                                <th>Name</th>
                                                 <th>Phone Number</th>
                                                <th>Email</th>
                                                 
                                                
                                                <th>Date Joined</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $i=1;
                                            foreach($res as $value){
                                                
                                                ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><a href="activity.php?uid=<?php  echo $value['id'];  ?>"><?php echo $value['name']; ?></a></td>
                                               
                                                <td><?php echo $value['mobile']; ?></td>
                                                <td><?php echo $value['email']; ?></td>
                                               
                                                <td><?php echo $value['created_at']; ?></td>
                                                
                                               
                                            </tr>
                                                <!-- Modal -->
                                            <div id="myModal<?php echo $i ;?>" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="email">Email address:</label>
                                                                    <input type="email"  class="form-control" value= "<?php echo $value['email']; ?>" id="email" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="pwd">Subject:</label>
                                                                    <input type="text" class="form-control" id="sub" required>
                                                                </div>
                                                                 <div class="form-group">
                                                                    <label for="pwd">Message:</label>
                                                                    <textarea id="message" class="form-control" required> </textarea>
                                                                </div>
                                                                 <button type="button" id="emailClick" class="btn btn-default" >Submit</button>
                                                               <button type="submit" data-dismiss="modal" class="btn btn-default" >Cancel</button>
                                                            
                                                            </form>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div id="myModal2<?php echo $i ;?>" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">

                                                        <div class="modal-body">
                                                            <p>Are you sure, You want to block the user?</p>
                                                              <button type="submit" class="btn btn-default" >Block</button>
                                                              <button type="submit" data-dismiss="modal" class="btn btn-default" >Cancel</button>
                                                            
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                                <script>
                                                    $(function () {
                                                   $("#emailClick").click(function(){ 
                                                       var email=$("#email").val();
                                                       var sub=$("#sub").val();
                                                       if(sub ==""){
                                                           alert('Please write proper subject'); 
                                                            $( "#sub" ).focus();
                                                       }else{
                                                             alert('Mail Sent sucessfully');
                                                             location.reload();
                                                       }
                                                       
                                                 
                                                  });
                                                   });
                                                </script>
                                                <?php $i++;} ?>   
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



<?php include('include/footer.php'); ?>
  <script>
                $(document).ready(function () {
                   // alert('fdsf');

                    $('#example').dataTable({
                        "bInfo": false,
                         "pageLength": 50,

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
<script>
var $rows = $('#myTable tr');
$('#myInput').keyup(function() {
  
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
</script>
<!-- dynamic search data script end -->


<script type="text/javascript">
$("#checkAll").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>


   
<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);
    

    cb(start, end);
    
});
</script>