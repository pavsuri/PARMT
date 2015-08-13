<!DOCTYPE html>
<html lang="en"><head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Vlreleases</title>    
        <link href="/VL-releases2/web/css/bootstrap.css" rel="stylesheet"> 
        <link href="/VL-releases2/web/fonts/css/font-awesome.css" rel="stylesheet">	
        <link href="/VL-releases2/web/css/morris.css" rel="stylesheet">    
        <link href="/VL-releases2/web/css/style.css" rel="stylesheet">
        <link href="/VL-releases2/web/css/plugins.css" rel="stylesheet">
        <link href="/VL-releases2/web/css/demo.css" rel="stylesheet">
        <!--<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">-->
        <!--[if (lt IE 9) & (!IEMobile)]>
        <script src="js/respond.src.js"></script>
        <![endif]-->
    </head>
    <body class="pace-done">	
        <div id="wrapper">        
            <nav role="navigation" class="navbar-top">          
                <div class="navbar-header">
                    <button data-target=".sidebar-collapse" data-toggle="collapse" class="navbar-toggle pull-right" type="button">
                        <i class="fa fa-bars"></i> Menu
                    </button>
                    <div class="navbar-brand">
                        <a href="index.html">
                            <img height="20" width="172" alt="" class="hisrc img-responsive" src="images/vl-releases-logo.png">
                        </a>
                    </div>
                </div>
                <div class="nav-top" >
                    <ul class="nav navbar-left">
                        <li class="tooltip-sidebar-toggle">
                            <a title="" data-placement="right" data-toggle="tooltip" id="sidebar-toggle" href="#" data-original-title="Sidebar Toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </li>                   
                    </ul>                
                    <ul class="nav navbar-right" style="display:none;">                    
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="messages-link dropdown-toggle" href="#">
                                <i class="fa fa-envelope"></i>
                                <span class="number">4</span> <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-scroll dropdown-messages">
                                <li class="dropdown-header">
                                    <i class="fa fa-envelope"></i> 4 New Messages
                                </li>
                                <li id="messageScroll" style="overflow: hidden; width: auto; height: 200px;">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <img alt="" src="img/user-profile-1.jpg" class="img-circle">
                                                    </div>
                                                    <div class="col-xs-10">
                                                        <p>
                                                            <strong>Jane Smith</strong>: Hi again! I wanted to let you know that the order...
                                                        </p>
                                                        <p class="small">
                                                            <i class="fa fa-clock-o"></i> 12 minutes ago
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <img alt="" src="img/user-profile-2.jpg" class="img-circle">
                                                    </div>
                                                    <div class="col-xs-10">
                                                        <p>
                                                            <strong>Roddy Austin</strong>: Thanks for the info, if you need anything from...
                                                        </p>
                                                        <p class="small">
                                                            <i class="fa fa-clock-o"></i> 3:39 PM
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <img alt="" src="img/user-profile-3.jpg" class="img-circle">
                                                    </div>
                                                    <div class="col-xs-10">
                                                        <p>
                                                            <strong>Stacy Gibson</strong>: Hey, what was the purchase order number for the...
                                                        </p>
                                                        <p class="small">
                                                            <i class="fa fa-clock-o"></i> Yesterday at 10:23 AM
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="row">
                                                    <div class="col-xs-2">
                                                        <img alt="" src="img/user-profile-4.jpg" class="img-circle">
                                                    </div>
                                                    <div class="col-xs-10">
                                                        <p>
                                                            <strong>Jeffrey Cortez</strong>: Check out this video I found the other day, it's...
                                                        </p>
                                                        <p class="small">
                                                            <i class="fa fa-clock-o"></i> Tuesday at 12:23 PM
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>                            
                                <li class="dropdown-footer">
                                    <a href="mailbox.html">Read All Messages</a>
                                </li>

                            </ul>                        
                        </li>

                        <li class="dropdown">
                            <a data-toggle="dropdown" class="alerts-link dropdown-toggle" href="#">
                                <i class="fa fa-bell"></i> 
                                <span class="number">9</span><i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-scroll dropdown-alerts">
                                <li class="dropdown-header">
                                    <i class="fa fa-bell"></i> 9 New Alerts
                                </li>
                                <li id="alertScroll" style="overflow: hidden; width: auto; height: 200px;">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <div class="alert-icon green pull-left">
                                                    <i class="fa fa-money"></i>
                                                </div>
                                                Order #2931 Received
                                                <span class="small pull-right">
                                                    <strong>
                                                        <em>3 minutes ago</em>
                                                    </strong>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="alert-icon blue pull-left">
                                                    <i class="fa fa-comment"></i>
                                                </div>
                                                New Comments
                                                <span class="badge blue pull-right">15</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="alert-icon orange pull-left">
                                                    <i class="fa fa-wrench"></i>
                                                </div>
                                                Crawl Errors Detected
                                                <span class="badge orange pull-right">3</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="alert-icon yellow pull-left">
                                                    <i class="fa fa-question-circle"></i>
                                                </div>
                                                Server #2 Not Responding
                                                <span class="small pull-right">
                                                    <strong>
                                                        <em>5:25 PM</em>
                                                    </strong>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="alert-icon red pull-left">
                                                    <i class="fa fa-bolt"></i>
                                                </div>
                                                Server #4 Crashed
                                                <span class="small pull-right">
                                                    <strong>
                                                        <em>3:34 PM</em>
                                                    </strong>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="alert-icon green pull-left">
                                                    <i class="fa fa-plus-circle"></i>
                                                </div>
                                                New Users
                                                <span class="badge green pull-right">5</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="alert-icon orange pull-left">
                                                    <i class="fa fa-download"></i>
                                                </div>
                                                Downloads
                                                <span class="badge orange pull-right">16</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="alert-icon purple pull-left">
                                                    <i class="fa fa-cloud-upload"></i>
                                                </div>
                                                Server #8 Rebooted
                                                <span class="small pull-right">
                                                    <strong>
                                                        <em>12 hours ago</em>
                                                    </strong>
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="alert-icon red pull-left">
                                                    <i class="fa fa-bolt"></i>
                                                </div>
                                                Server #8 Crashed
                                                <span class="small pull-right">
                                                    <strong>
                                                        <em>12 hours ago</em>
                                                    </strong>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">View All Alerts</a>
                                </li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="tasks-link dropdown-toggle" href="#">
                                <i class="fa fa-tasks"></i> 
                                <span class="number">10</span><i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-scroll dropdown-tasks">
                                <li class="dropdown-header">
                                    <i class="fa fa-tasks"></i> 10 Pending Tasks
                                </li>
                                <li id="taskScroll" style="overflow: hidden; width: auto; height: 200px;">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">
                                                <p>
                                                    Software Update 2.1
                                                    <span class="pull-right">
                                                        <strong>60%</strong>
                                                    </span>
                                                </p>
                                                <div class="progress">
                                                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p>
                                                    Server #2 Hardware Upgrade
                                                    <span class="pull-right">
                                                        <strong>90%</strong>
                                                    </span>
                                                </p>
                                                <div class="progress progress-striped">
                                                    <div style="width: 90%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p>
                                                    Call Ticket #2032
                                                    <span class="pull-right">
                                                        <strong>72%</strong>
                                                    </span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div style="width: 72%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="72" role="progressbar" class="progress-bar progress-bar-warning"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p>
                                                    Emergency Maintenance
                                                    <span class="pull-right">
                                                        <strong>36%</strong>
                                                    </span>
                                                </p>
                                                <div class="progress progress-striped">
                                                    <div style="width: 36%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="36" role="progressbar" class="progress-bar progress-bar-danger"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p>
                                                    Purchase Order #439
                                                    <span class="pull-right">
                                                        <strong>52%</strong>
                                                    </span>
                                                </p>
                                                <div class="progress progress-striped">
                                                    <div style="width: 52%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="52" role="progressbar" class="progress-bar progress-bar-info"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p>
                                                    March Content Update
                                                    <span class="pull-right">
                                                        <strong>14%</strong>
                                                    </span>
                                                </p>
                                                <div class="progress">
                                                    <div style="width: 14%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="14" role="progressbar" class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p>
                                                    Client #42 Data Scrubbing
                                                    <span class="pull-right">
                                                        <strong>68%</strong>
                                                    </span>
                                                </p>
                                                <div class="progress progress-striped">
                                                    <div style="width: 68%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="68" role="progressbar" class="progress-bar"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p>
                                                    PHP Upgrade Server #6
                                                    <span class="pull-right">
                                                        <strong>85%</strong>
                                                    </span>
                                                </p>
                                                <div class="progress">
                                                    <div style="width: 85%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="85" role="progressbar" class="progress-bar progress-bar-warning"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p>
                                                    Malware Scan
                                                    <span class="pull-right">
                                                        <strong>66%</strong>
                                                    </span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div style="width: 66%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="66" role="progressbar" class="progress-bar progress-bar-danger"></div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <p>
                                                    New Employee Intake
                                                    <span class="pull-right">
                                                        <strong>98%</strong>
                                                    </span>
                                                </p>
                                                <div class="progress progress-striped active">
                                                    <div style="width: 98%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="14" role="progressbar" class="progress-bar progress-bar-success"></div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="#">View All Tasks</a>
                                </li>

                            </ul>
                        </li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <i class="fa fa-user"></i>  <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <a href="profile.html">
                                        <i class="fa fa-user"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> My Messages
                                        <span class="badge green pull-right">4</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-bell"></i> My Alerts
                                        <span class="badge orange pull-right">9</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-tasks"></i> My Tasks
                                        <span class="badge blue pull-right">10</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="calendar.html">
                                        <i class="fa fa-calendar"></i> My Calendar
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-gear"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#logout" class="logout_open" data-popup-ordinal="0" id="open_10541059">
                                        <i class="fa fa-sign-out"></i> Logout
                                        <strong>John Smith</strong>
                                    </a>
                                </li>							
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>

            <nav class="navbar-side" role="navigation">
                <div class="navbar-collapse sidebar-collapse collapse">               
                    <ul id="side" class="nav navbar-nav side-nav">
                        <li class="side-user hidden-xs">
                            <img class="img-circle" src="images/profile-pic.jpg" alt="">
                            <p class="welcome">
                                <i class="fa fa-key"></i> Logged in as
                            </p>
                            <p class="name tooltip-sidebar-logout">
                                John
                                <span class="last-name">Smith</span> <a id="open_29188745" data-popup-ordinal="1" style="color: inherit" class="logout_open" href="#logout" data-toggle="tooltip" data-placement="top" title="Logout"><i class="fa fa-sign-out" data-toggle="modal" data-target="#myModal"></i></a>
                            </p>
                            <div class="clearfix"></div>
                        </li>
                        <li class="nav-search">
                            <form role="form">
                                <input type="search" placeholder="Search..." class="form-control">
                                <button class="btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>
                        </li>
                        <li>
                            <a href="index.html" class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="fa fa-files-o"></i> Daily Status Report
                            </a>
                        </li>					
                    </ul>
                </div>
            </nav>        
            <div class="" id="page-wrapper">
                <div class="page-content page-content-ease-in">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title">
                                <h1>Dashboard</h1>                            
                            </div>
                        </div>                   
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tile green" style="height: 320px">
                                    <h4>Hours / Month <!--<a href="javascript:void(0);"><i class="fa fa-refresh pull-right"></i></a>--></h4>
                                <p></p>
                                <div style="position: relative;" id="morris-chart-dashboard"></div>
                            </div>
                        </div>
                    </div>
                    <form action="/Vl-releases2/web/app_dev.php/dashboard/" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget">
                                    <!-- Widget head -->
                                    <div class="widget-head">
                                        <div class="pull-left">Quick Daily Task</div>                  
                                        <div class="clearfix"></div>
                                    </div>              

                                    <!-- Widget content -->
                                    <div class="widget-content">
                                        <div class="row">
                                            <div class="col-lg-3">                               
                                                <select name="project" class="form-control">

                                                    <option value="">Select Project</option>
                                                    <?php
                                                    foreach ($projects as $projectId => $project) {

                                                        echo '<option value="' . $project->getId() . '">' . $project->getProjectName() . '</option>';
                                                    }
                                                    ?>

                                                </select>  
                                            </div>
                                            <div class="col-lg-3">                               
                                                <select name="activity" class="form-control">
                                                    <option value="">Select Activity</option>
                                                    <?php
                                                    foreach ($activities as $activityId => $activity) {

                                                        echo '<option value="' . $activity->getId() . '">' . $activity->getActivityName() . '</option>';
                                                    }
                                                    ?>
                                                </select>  
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6"> 
                                                <input type="text" id="task" name="taskname" class="form-control" placeholder="Task">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3">						
                                                <div id="datetimepicker3" class="input-append">
                                                    <span class="add-on">									
                                                        <input data-format="hh:mm:ss" type="text" id="totalHours" name="totalHoursValue" class="form-control" placeholder="Total Hours">
                                                    </span>
                                                </div>								
                                            </div>
                                            <div class="col-lg-3"> 
                                                <button type = "submit" class="btn btn-green">Submit</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>


                                <!-- Widget ends -->
                            </div>
                        </div>
                </div>
            </div>
        </div>	

        <!-- Logout Modal Popup -->
        <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-customize">    
                <div id="logout" >
                    <div class="logout-message">
                        <img alt="" src="images/profile-pic.jpg" class="img-circle img-logout">
                        <h3>
                            <i class="fa fa-sign-out text-green"></i> Ready to go?
                        </h3>
                        <p>Select "Logout" below if you are ready<br> to end your current session.</p>
                        <ul class="list-inline">
                            <li>
                                <a class="btn btn-green" href="javascript:void(0);">
                                    <strong>Logout</strong>
                                </a>
                            </li>
                            <li>
                                <button class="logout_close btn btn-green" data-dismiss="modal">Cancel</button>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- Logout Modal Popup -->

        <!-- global scripts -->
        <script src="js/jquery_003.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/defaults.js"></script>

        <!-- morris charts -->
        <script src="js/raphael-2.js"></script>
        <script src="js/morris.js"></script>

        <!-- theme scripts -->
        <script src="js/chart-demo.js"></script>
        <script src="js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#datetimepicker3').datetimepicker({
                    pickDate: false
                });
            })
        </script>
    </body>
</html>