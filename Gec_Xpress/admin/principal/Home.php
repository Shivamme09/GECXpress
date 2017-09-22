<?php session_start();
    ini_set('error_reporting', 0);
    ini_set('display_errors', 0); ?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>Admin</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
  <script type="text/javascript" src="admin.js"></script>
</head>
<body>	
  <!--=============================
                                             NAVIGATION
                                   =============================-->
  <!--top nav start=======-->
  <nav class="navbar navbar-inverse top-bar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button> <span class="menu-icon" id="menu-icon"><i class="faa-burst" aria-hidden="true" id="chang-menu-icon"></i></span>
        <a class="navbar-brand" href="#" style=font-family:broadway;font-size:36px;margin-top:10px;>GEC Xpress</a>
      </div>
      <div class="collapse navbar-collapse navbar-right" id="myNavbar">
        <form class="navbar-form navbar-left">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i> </button>
            </div>
          </div>
        </form>
        <ul class="nav navbar-nav">
          <!--<li class=""><a href="#"><i class="fa fa-refresh"></i> Start Tour</a> </li>-->
          <!--<li class=""><a href="#"><i class="fa fa-volume-up"></i></a> </li>-->
          <li class=""><a href="#"><i class="fa fa-newspaper-o"></i> <span class="badge">5</span></a> </li>
          <li class=""><a href="#"><i class="fa fa-comments-o"></i> <span class="badge">9</span></a> </li>
		  <li class=""><a href="#"><i class="fa fa-exclamation"></i> <span class="badge">9</span></a> </li>
          <li class="">
            <a href="#" class="user-profile"> <span class=""></span> </a>
          </li>
          <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Principal          
           <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
              <li> <a href="#"><i class="fa fa-cog"></i> Setting</a> </li>
              <li> <a href="#"><i class="fa fa-power-off"></i> Logout</a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--    top nav end===========-->
  <div class="wrapper" id="wrapper">
    <div class="left-container" id="left-container">
      <!-- begin SIDE NAV USER PANEL -->
      <div class="left-sidebar" id="show-nav">
        <ul id="side" class="side-nav">
          <li class="panel" style= margin-top:10px;>
            <a id="panel1" href="javascript:;" data-toggle="collapse" data-target="#Dashboard"> <i class="fa fa-cog fa-spin fa- fa-fw"></i> News
              <i class="fa fa-chevron-left pull-right" id="arow1"></i> </a>
            <ul class="collapse nav" id="Dashboard">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Post News</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> View News</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel2" href="javascript:;" data-toggle="collapse" data-target="#charts"> <i class="fa fa-spinner fa-pulse fa- fa-fw"></i> Issue
              <i class="fa fa-chevron-left pull-right" id="arow2"></i> </a>
            <ul class="collapse nav" id="charts">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i>View Issue</a> </li>
             
            </ul>
          </li>
          <li class="panel">
            <a id="panel3" href="javascript:;" data-toggle="collapse" data-target="#calendar"> <i class="fa fa-refresh fa-spin fa- fa-fw"></i> Feedback
              <span class="label label-danger"></span> <i class="fa fa-chevron-left pull-right" id="arow3"></i> </a>
            <ul class="collapse nav" id="calendar">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i>View feedback</a> </li>
            
            </ul>
          </li>
          <li class="panel">
            <a id="panel4" href="javascript:;" data-toggle="collapse" data-target="#clipboard"> <i class="fa fa-user-circle-o"></i>Admin
              <i class="fa fa fa-chevron-left pull-right" id="arow4"></i> </a>
            <ul class="collapse nav" id="clipboard">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> Add HOD</a> </li>
			   <li> <a href="#"><i class="fa fa-angle-double-right"></i> Add Other Admin</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i> View HOD</a> </li>
			    <li> <a href="#"><i class="fa fa-angle-double-right"></i> View Other Admin</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel5" href="javascript:;" data-toggle="collapse" data-target="#edit"> <i class="fa fa-edit"></i>Faculty
              <i class="fa fa fa-chevron-left pull-right" id="arow5"></i>
            </a>
            <ul class="collapse nav" id="edit">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i>Add Faculty</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i>View Faculty</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel6" href="javascript:;" data-toggle="collapse" data-target="#inbox"> <i class="fa fa-inbox"></i>Student
              <span class="label label-primary"></span> <i class="fa fa fa-chevron-left pull-right" id="arow6"></i> </a>
            <ul class="collapse nav" id="inbox">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i>Add Student</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i>View Student</a> </li>
            </ul>
          </li>
          <li class="panel">
            <a id="panel7" href="javascript:;" data-toggle="collapse" data-target="#cogs"> <i class="fa fa-edit"></i> Edit
              <span class="label label-warning"></span> <i class="fa fa fa-chevron-left pull-right" id="arow7"></i> </a>
            <ul class="collapse nav" id="cogs">
              <li> <a href="#"><i class="fa fa-angle-double-right"></i>Edit News</a> </li>
              <li> <a href="#"><i class="fa fa-angle-double-right"></i>Edit Department</a> </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- END SIDE NAV USER PANEL -->
    </div>
    <div class="right-container" id="right-container">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            <ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#"> Home</a></li>
						<li class="active">Dashboard</li>
					</ul>
            </div>
           
            </div>
            
            <div class="row">
            <div class="col-md-12">
                <div class="main-header">
					<h2>DASHBOARD</h2>
					
				</div>
                </div>
                </div>
				<div class="container-fluid">
                <div class="row padding-top">
				<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css">

			<div class="row dashboard-stats">
                        <div class="col-md-3 col-sm-6">
                            <section class="panel panel-box">
                                <div class="panel-left panel-icon bg-success">
								<a href=""><img src="news.ico" class="img-responsive" alt="News" height="50%"></a>
                                </div>
                                <div class="panel-right panel-icon bg-reverse">
                                    <p class="size-h1 no-margin countdown_first">56</p>
                                    <p class="text-muted no-margin text"><span>News</span></p>
                                </div>
                            </section>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <section class="panel panel-box">
                                <div class="panel-left panel-icon bg-danger">
							<a href=""><img src="issue.png" class="img-responsive" alt="News" height="50%"></a>
                                </div>
                                <div class="panel-right panel-icon bg-reverse">
                                    <p class="size-h1 no-margin countdown_second">94</p>
                                    <p class="text-muted no-margin text"><span>Issue</span></p>
                                </div>
                            </section>
                            
                        </div>
                         <div class="col-md-3 col-sm-6">
                            <section class="panel panel-box">
                                <div class="panel-left panel-icon bg-danger">
							<a href=""><img src="feedback.png" class="img-responsive" alt="News" height="50%"></a>
                                </div>
                                <div class="panel-right panel-icon bg-reverse">
                                    <p class="size-h1 no-margin countdown_second">45</p>
                                    <p class="text-muted no-margin text"><span>Feedback</span></p>
                                </div>
                            </section>
                            
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <section class="panel panel-box">
                                <div class="panel-left panel-icon bg-info">
						<a href=""><img src="trash.png" class="img-responsive" alt="News" height="50%"></a>	
                                </div>
                                <div class="panel-right panel-icon bg-reverse">
                                    <p class="size-h1 no-margin countdown_fourth">9</p>
                                    <p class="text-muted no-margin text"><span>Trash</span></p>
                                </div>
                            </section>
                        </div>  
						<!-- Circular Progress Bar -->
						<div class="col-md-3 col-sm-6" style="margin-top:50px;">
                            <div class="progress blue">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">5</div>
            </div>
			<p><center><strong>No.of HOD</strong></center></p>
				</div>
				
				<div class="col-md-3 col-sm-6" style="margin-top:50px;">
                            <div class="progress yellow">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">20</div>
            </div>
			<p><center><strong>No.of Admin</strong></center></p>
				</div>
				<div class="col-md-3 col-sm-6" style="margin-top:50px;">
                            <div class="progress pink">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">10</div>
            </div>
			<p><center><strong>No.of Faculties</strong></center></p>
				</div>
				<div class="col-md-3 col-sm-6" style="margin-top:50px;">
                            <div class="progress green">
                <span class="progress-left">
                    <span class="progress-bar"></span>
                </span>
                <span class="progress-right">
                    <span class="progress-bar"></span>
                </span>
                <div class="progress-value">20</div>
            </div>
			<p><center><strong>No.of Students</strong></center></p>
				</div>
				
				<div class="container" style="margin-top:40px;">
    <div class="row"style="margin-top:40px;">
        <div class="row"style="margin-top:40px;">
            <div class="col-md-9" style="margin-top:40px;">
                <h3>
                   Trending News.....
                </h3>
            </div>
            <div class="col-md-3">
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-chevron-left btn btn-success"  href="#carousel-example" data-slide="prev"></a>
                    <a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"data-slide="next"></a>
                </div>
            </div>
        </div>
        <?php include '../Admin_home.php'; ?>
        <div id="carousel-example1" class="carousel slide hidden-xs" data-ride="carousel">
            
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://immediatenet.com/t/l?Size=1024x768&URL=http://www.downtowntheater.tix.com"> 
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                <strong>News 1</strong></h5>
                                            <h5 class="price-text-color">
                                                http://www.tix.com</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i>
                                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">Launch</a>
                                        </p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i>
                                            <a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a>
                                        </p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://immediatenet.com/t/l?Size=1024x768&URL=http://www.tix.com"> 
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                <strong>News 1</strong>
                                            </h5>
                                            <h5 class="price-text-color">
                                                www.tix.com
                                            </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Edit</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://immediatenet.com/t/l?Size=1024x768&URL=http://www.tix.com"> 
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                <strong>News 2</strong>
                                            </h5>
                                            <h5 class="price-text-color">
                                                www.tix.com
                                            </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                   <img src="http://immediatenet.com/t/l?Size=1024x768&URL=http://www.downtowntheater.tix.com"> 
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                <strong>News 4</strong>
                                            </h5>
                                            <h5 class="price-text-color">
                                                www.tix.com
                                            </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://immediatenet.com/t/l?Size=1024x768&URL=http://www.downtowntheater.tix.com"> 
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                <strong>News 5</strong>
                                            </h5>
                                            <h5 class="price-text-color">
                                                www.tix.com
                                            </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://immediatenet.com/t/l?Size=1024x768&URL=http://www.downtowntheater.tix.com"> 
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                               <strong>News 6</strong>
                                            </h5>
                                            <h5 class="price-text-color">
                                                www.tix.com
                                            </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                    <img src="http://immediatenet.com/t/l?Size=1024x768&URL=http://www.downtowntheater.tix.com"> 
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                <strong>News 7</strong>
                                            </h5>
                                            <h5 class="price-text-color">
                                                www.tix.com
                                            </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
                                   <img src="http://immediatenet.com/t/l?Size=1024x768&URL=http://www.downtowntheater.tix.com"> 
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                News 6
                                            </h5>
                                            <h5 class="price-text-color">
                                                www.tix.com
                                            </h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="separator clear-left">
                                        <p class="btn-add">
                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
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
                    </div>
				</div>
        </div>
    </div>
  </div>
  
  <script src="js/jquery-3.1.1.js"></script>
  <script src="js/bootstrap.js"></script>
   
  <script type="text/javascript">
    $(document).ready(function() {
      $("#panel1").click(function() {
        $("#arow1").toggleClass("fa-chevron-left");
        $("#arow1").toggleClass("fa-chevron-down");
      });
        
      $("#panel2").click(function() {
        $("#arow2").toggleClass("fa-chevron-left");
        $("#arow2").toggleClass("fa-chevron-down");
      });
        
      $("#panel3").click(function() {
        $("#arow3").toggleClass("fa-chevron-left");
        $("#arow3").toggleClass("fa-chevron-down");
      });
        
      $("#panel4").click(function() {
        $("#arow4").toggleClass("fa-chevron-left");
          $("#arow4").toggleClass("fa-chevron-down");
      });
        
      $("#panel5").click(function() {
        $("#arow5").toggleClass("fa-chevron-left");
        $("#arow5").toggleClass("fa-chevron-down");
      });
        
      $("#panel6").click(function() {
        $("#arow6").toggleClass("fa-chevron-left");
        $("#arow6").toggleClass("fa-chevron-down");
      });
        
      $("#panel7").click(function() {
        $("#arow7").toggleClass("fa-chevron-left");
        $("#arow7").toggleClass("fa-chevron-down");
      });
        
      $("#panel8").click(function() {
        $("#arow8").toggleClass("fa-chevron-left");
        $("#arow8").toggleClass("fa-chevron-down");
      });
        
      $("#panel9").click(function() {
        $("#arow9").toggleClass("fa-chevron-left");
        $("#arow9").toggleClass("fa-chevron-down");
      });
        
      $("#panel10").click(function() {
        $("#arow10").toggleClass("fa-chevron-left");
        $("#arow10").toggleClass("fa-chevron-down");
      });
        
      $("#panel11").click(function() {
        $("#arow11").toggleClass("fa-chevron-left");
        $("#arow11").toggleClass("fa-chevron-down");
      });
        
      $("#menu-icon").click(function() {
        $("#chang-menu-icon").toggleClass("fa-bars");
        $("#chang-menu-icon").toggleClass("fa-times");
        $("#show-nav").toggleClass("hide-sidebar");
        $("#show-nav").toggleClass("left-sidebar");
          
        $("#left-container").toggleClass("less-width");
        $("#right-container").toggleClass("full-width");
      });
        
     
        
    });
  </script>
  <footer>
        <p>© 2017<a style="color:#0a93a6; text-decoration:none;" href="#"> GEC Xpress</a>, All rights reserved 2016-2017.</p>
    </footer>
</body>
</html>