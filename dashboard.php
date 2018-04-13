<?php include('include/header.php'); ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php 
    include('include/sidebar.php');
    include('class/mysql_crud.php');
    $db = new Database();
$db->connect();
//site statics count
    //tournaments count
   // $rt = "utype" . "=" . '"' . 2 . '"';
$db->select('tournament', '*', NULL, NULL, 'id DESC');
//$db->select_single('users', '*', NULL, $rt, NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$t_count=count($res);
//total wagers
$db->select('wagers_post', '*', NULL, NULL, 'id DESC');
//$db->select_single('users', '*', NULL, $rt, NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$w_count=count($res);

//total membership
   $rt = "subscription" . "=" . '"' . 1 . '"';
$db->select('users', '*', NULL, $rt, 'id DESC');
//$db->select_single('users', '*', NULL, $rt, NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$t_membership=count($res);
//total users
$db->select('users', '*', NULL, NULL, 'id DESC');
//$db->select_single('users', '*', NULL, $rt, NULL); // Table name, Column Names, JOIN, WHERE conditions, ORDER BY conditions
$res = $db->getResult();
$t_users=count($res);
    ?>

    <div id="page-wrapper">

        <div>
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb text-xs">
                        <li><a href="dashboard.php">Home</a></li>
                        <li class="active">Dashboad</li>
                    </ol>

                    <div class="panel panel-primary">
                        <div class="panel-body">

                            <h5 class="text-uppercase margin-none"><i class="fa fa-dashboard"></i> Dashboard</h5>
                            
                        </div>
                    </div>
                   <!-- <div class="panel1 panel-default">
                        <div class="panel-body">
                           <!-- <div id="maingraph"></div>-->
                       <!-- </div>-->
                        <!--<div class="panel-footer">

                            <i class="fa fa-download-cloud"></i> <center>
                               Weekly Wagers Report  
                            </center>

                        </div>-->
                    </div>


                    <div class="row">
                        <div class="col-md-3">
                            <div class="panel1 panel-default  box-white panel-status">
                                <div class="panel-body padding-none">
                                    <a href="user.php">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-bullseye fa-5x panel-status-icon"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?php echo $t_users;?></div>
                                                <div class="text-uppercase text-xs">Total User</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel1 panel-default box-white panel-status panel-info">
                                <div class="panel-body padding-none">
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-tasks fa-5x panel-status-icon"></i>
                                            </div>
                                            <div class="col-xs-9 text-right text-info">
                                                <div class="huge"><?php echo $w_count; ?></div>
                                                <div class="text-uppercase text-xs">New User</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel1 panel-default  box-white panel-status panel-success">
                                <div class="panel-body padding-none">
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-user fa-5x panel-status-icon"></i>
                                            </div>
                                            <div class="col-xs-9 text-right text-success">
                                                <div class="huge"><?php echo $t_membership; ?></div>
                                                <div class="text-uppercase text-xs">Total Filght</div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="panel1 panel-default  box-white panel-status panel-success">
                                <div class="panel-body padding-none">
                                    <a href="#">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-user fa-5x panel-status-icon"></i>
                                            </div>
                                            <div class="col-xs-9 text-right text-success">
                                                <div class="huge">0</div>
                                                <div class="text-uppercase text-xs">Total Activity</div>

                                            </div>
                                           
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- row close -->
                 
                </div>
            </div>

        </div>
        <!-- /.social-block -->


    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include('include/footer.php'); ?>
