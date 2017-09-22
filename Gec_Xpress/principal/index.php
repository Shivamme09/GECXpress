<?php include '../gecdp.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/materialize/css/materialize.min.css" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">insert_chart</i> <strong>TRACK</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"> 
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>				
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown3"><i class="fa fa-tasks fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				<li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i class="fa fa-bell fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b>Principal</b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
</li> 
<li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>
<ul id="dropdown2" class="dropdown-content w250">
  <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>
<ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 1</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (success)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 2</strong>
					<span class="pull-right text-muted">28% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
						<span class="sr-only">28% Complete</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 3</strong>
					<span class="pull-right text-muted">60% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
						<span class="sr-only">60% Complete (warning)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<p>
					<strong>Task 4</strong>
					<span class="pull-right text-muted">85% Complete</span>
				</p>
				<div class="progress progress-striped active">
					<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
						<span class="sr-only">85% Complete (danger)</span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<li class="divider"></li>
	<li>
</ul>   
<ul id="dropdown4" class="dropdown-content dropdown-tasks w250">
  <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
</ul>  
	   <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark" href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="ui-elements.html" class="waves-effect waves-dark"><i class="fa fa-desktop"></i> UI Elements</a>
                    </li>
					<li>
                        <a href="chart.html" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tab-panel.html" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
                    </li>
                    
                    <li>
                        <a href="table.html" class="waves-effect waves-dark"><i class="fa fa-table"></i> Responsive Tables</a>
                    </li>
                    <li>
                        <a href="form.html" class="waves-effect waves-dark"><i class="fa fa-edit"></i> Forms </a>
                    </li>


                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="empty.html" class="waves-effect waves-dark"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Dashboard
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Dashboard</a></li>
					  <li class="active">Data</li>
					</ol> 
									
		</div>
            <div id="page-inner">

			
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image red">
						<i class="fa fa-comments-o "></i>
						</div>
						<div class="card-stacked">
						<div class="card-content">
                                                    <h3>
                                                        <?php
                                                            $qry="SELECT * FROM feedback WHERE trash!='yes'";
                                                            $result= mysqli_query($con, $qry);
                                                            echo mysqli_num_rows($result);
                                                        ?>
                                                    </h3> 
						</div>
						<div class="card-action">
						<strong>Feedbacks</strong>
						</div>
						</div>
						</div>
	 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
						<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image orange">
						<i class="fa fa-exclamation"></i>
						</div>
						<div class="card-stacked">
						<div class="card-content">
                                                    <h3>
                                                        <?php
                                                            $qry="SELECT * FROM issues WHERE trash!='yes'";
                                                            $result= mysqli_query($con, $qry);
                                                            echo mysqli_num_rows($result);
                                                        ?>
                                                    </h3> 
						</div>
						<div class="card-action">
						<strong>Issues</strong>
						</div>
						</div>
						</div> 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
							<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image blue">
						<i class="fa fa-file-text-o"></i>
						</div>
						<div class="card-stacked">
						<div class="card-content">
                                                    <h3>
                                                        <?php
                                                            $qry="SELECT * FROM news WHERE trash!='yes'";
                                                            $result= mysqli_query($con, $qry);
                                                            echo mysqli_num_rows($result);
                                                        ?>
                                                    </h3> 
						</div>
						<div class="card-action">
						<strong>News</strong>
						</div>
						</div>
						</div> 
						 
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
					
					<div class="card horizontal cardIcon waves-effect waves-dark">
						<div class="card-image">
						<i class="fa fa-trash-o"></i>
						</div>
						<div class="card-stacked">
						<div class="card-content">
                                                    <h3>
                                                        <?php
                                                            $qry_news="SELECT * FROM news WHERE trash='yes'";
                                                            $result_news= mysqli_query($con, $qry_news);
                                                            $news= mysqli_num_rows($result_news);
                                                            
                                                            $qry_feed="SELECT * FROM feedback WHERE trash='yes'";
                                                            $result_feed= mysqli_query($con, $qry_feed);
                                                            $feed= mysqli_num_rows($result_feed);
                                                            
                                                            $qry_issue="SELECT * FROM issues WHERE trash='yes'";
                                                            $result_issue= mysqli_query($con, $qry_issue);
                                                            $issue= mysqli_num_rows($result_issue);
                                                            
                                                            $sum=$news+$feed+$issue;
                                                            echo $sum;
                                                        ?>
                                                    </h3> 
						</div>
						<div class="card-action">
						<strong>Trash</strong>
						</div>
						</div>
						</div> 
						 
                    </div>
                </div>
			
                <!-- /. ROW  --> 
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-3"> 
					<div class="card-panel text-center">
						<h4>No. of HODs</h4>
                                                
						<div class="easypiechart" id="easypiechart-blue" data-percent="
                                                     <?php 
                                                        $qry_hod="SELECT * FROM admin WHERE admin_type='HOD'";
                                                        $result_hod= mysqli_query($con, $qry_hod);     
                                                        $hod= mysqli_num_rows($result_hod);
                                                        $hod_per=($hod*100)/50;
                                                        echo $hod_per;
                                                     ?>
                                                     " title="<?php echo $hod."/50" ?>"><span class="percent"><?php echo $hod; ?></span>
						</div> 
					</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3"> 
					<div class="card-panel text-center">
						<h4>No. of Admin</h4>
                                                <div class="easypiechart" id="easypiechart-red" data-percent="
                                                     <?php 
                                                        $qry_admin="SELECT * FROM admin WHERE admin_type='Administrative'";
                                                        $result_admin= mysqli_query($con, $qry_admin);     
                                                        $admin= mysqli_num_rows($result_admin);
                                                        $admin_per=($admin*100)/50;
                                                        echo $admin_per;
                                                     ?>
                                                     " title="<?php echo $admin."/50" ?>" ><span class="percent"><?php echo $admin; ?></span>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3"> 
					<div class="card-panel text-center">
						<h4>No. of Faculty</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="
                                                     <?php 
                                                        $qry_faculty="SELECT * FROM admin WHERE admin_type='Faculty'";
                                                        $result_faculty= mysqli_query($con, $qry_faculty);     
                                                        $faculty= mysqli_num_rows($result_faculty);
                                                        $faculty_per=($faculty*100)/150;
                                                        echo $faculty_per;
                                                     ?>
                                                     " title="<?php echo $faculty."/150" ?>" ><span class="percent"><?php echo $faculty; ?></span>
						</div> 
					</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3"> 
					<div class="card-panel text-center">
						<h4>No. of students</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="                                                     
                                                <?php
                                                    $qry_student="SELECT * FROM user_registration;";
                                                    $result_student= mysqli_query($con, $qry_student);
                                                    $student= mysqli_num_rows($result_student);
                                                    $student_per=($student*100)/2000;
                                                    echo $student_per;
                                                    ?>
                                                     " title="<?php echo $student."/2000" ?>" ><span class="percent"><?php echo $student; ?></span>
						</div>
					</div>
			</div> 
		</div><!--/.row-->
			
		
				
				<div class="row">
                                    <div class="col-md-5">
                                        <?php include './news_type_pie_chart.php'; ?>		  
                                    </div>
                                    <div class="col-md-1"></div>
					
				</div> 			
				<div class="row">
				<div class="col-md-12">
				
					</div>		
				</div> 	
                <!-- /. ROW  -->

	   
				
				
				
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
						<div class="card"><div class="card-action">
					  <b>Feedback List</b>
					</div>
					<div class="card-image">
					  <div class="collection">
						  <a href="#!" class="collection-item">Abhinaw<span class="new badge red" data-badge-caption="red">4</span></a>
						  <a href="#!" class="collection-item">Vikash<span class="new badge blue" data-badge-caption="blue">4</span></a>
						  <a href="#!" class="collection-item">Shivam<span class="badge">1</span>Alan</a>
							<a href="#!" class="collection-item">Rakesh<span class="new badge">4</span>Alan</a>
							<a href="#!" class="collection-item">Jaideep<span class="new badge blue" data-badge-caption="blue">4</span></a>
							<a href="#!" class="collection-item">Rohit<span class="badge">14</span>Alan</a>
							   <a href="#!" class="collection-item">Shashank<span class="new badge" data-badge-caption="custom caption">4</span></a>
							<a href="#!" class="collection-item">Ronit<span class="badge" data-badge-caption="custom caption">4</span></a>
						</div>
					</div> 
					
					</div>	  

                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12">
	<div class="card">
	<div class="card-action">
					  <b>News List</b>
					</div>
					<div class="card-image">
					  <ul class="collection">
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Avesh</span>
      <p>Avesh 2k18 is on heat <br>
         it's going to start soon...
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Aayam</span>
       <p>Aayam 2k18 is on heat <br>
         it's going to start soon...
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Teacher's Day celebration</span>
      <p>It's celebrated with fill zeal <br>
         
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">VT Report</span>
      <p>Submission of VT Report by Today <br>
         
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
					 </div>  
					</div>	 
					
                       

                    </div>
                </div>
                <!-- /. ROW  -->
		
				<footer>				
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
	
	<!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/materialize/js/materialize.min.js"></script>
	
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
 

</body>

</html>