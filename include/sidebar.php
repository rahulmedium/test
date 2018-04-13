<?php
session_start();
if (isset($_SESSION['name'])) {
    $user = $_SESSION['name'];
} else {
    header("location:index.php");
    VALUES ("'" . implode('", "', $params) . "'");
}

?> 
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="sidebar-toggle hidden-xs" href="javascript:void(0);"><i class="fa fa-bars fa-2x"></i></a>
        <a class="navbar-brand" href="#"> Airwhizz</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">


      
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">

                
                <li class="divider"></li>
                <li><a href="logout.php" class="dropdown-button"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">


                <li>
                    <a href="dashboard.php">
                        <span class="sidebar-item-icon fa-stack">
                            <i class="fa fa-square fa-stack-2x text-primary"></i>
                            <i class="fa fa-dashboard fa-stack-1x fa-inverse"></i>
                        </span>
                        <span class="sidebar-item-title">Dashboard</span>
                        <!--<span class="sidebar-item-subtitle">Application overview</span>-->
                    </a>
                </li>


                <li>
                    <a href="user.php">
                        <span class="sidebar-item-icon fa-stack ">
                            <i class="fa fa-square fa-stack-2x text-primary"></i>
                            <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                        </span>

                        <span class="sidebar-item-title">User</span>
                        <!--<span class="sidebar-item-subtitle">Bootstrap and UI features</span>-->
                    </a>

                    <!-- /.nav-second-level -->
                </li>

            



            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>