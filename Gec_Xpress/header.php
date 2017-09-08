<?php session_start();
include './gecdp.php';

if(isset($_REQUEST["btnlogin"]))
{
    $userid= htmlspecialchars($_REQUEST["txtuser"],ENT_QUOTES);
    $password= md5(htmlspecialchars($_REQUEST["txtpass"],ENT_QUOTES));    
    $qry="SELECT * FROM user_registration WHERE rollno='".$userid."' AND password='".$password."' AND trash!='yes'";
    $result=mysqli_query($con,$qry);
    $row=mysqli_fetch_array($result);
    if(mysqli_affected_rows($con)>0)
    {
        $_SESSION["userid"]=$userid;
        $_SESSION["password"]=$password;
        $_SESSION["student_branch"]=$row["branch"]
        ?>
        <script>
            window.location.href="User_home.php"
        </script>
        <?php
    }
    else
    {
        ?>
        <script>
            alert('Incorrect User Id and password');
            window.location.href="Gec_Xpress.php";
        </script>
        <?php
    }
}
else
{
?>
<!DocType html>
<html lang="en">
<html>
<head>
    <title>Header</title>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, intial-scale=1">
        
        <title></title>
        
        <link rel="icon" href="images/bulb_logo.png"/>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="style.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
          body {
              font-family: "Lato", sans-serif;
          }            
          .sidenav {
              height: 100%;
              width: 0;
              position: fixed;
              z-index: 1;
              top: 0;
              left: 0;
              background-color: #111;
              overflow-x: hidden;
              transition: 0.5s;
              padding-top: 60px;
          }

          .sidenav a {
              padding: 8px 8px 8px 32px;
              text-decoration: none;
              font-size: 15px;
              color: #818181;
              display: block;
              transition: 0.3s;
          }

          .sidenav a:hover, .offcanvas a:focus{
              color: #f1f1f1;
          }

          .sidenav .closebtn {
              position: absolute;
              top: 0;
              right: 25px;
              font-size: 36px;
              margin-left: 50px;
          }

          @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
          }
          
          .check
          {
              padding:0;
          }
          .container
          {
              padding:0;
          }
          .header_top
          {
              margin-top: 60px;
          }
          #hoverme:hover{
              border-bottom: 2px solid #fff;
              margin-top: 5px;
          }
          #hoverme{
              font-weight: bold;
          }
        
</style>
</head>
<body>
<!------>

<!--Login modal-->
<form method="POST" enctype="multipart/form-data">
    <div class="container-fluid">
        <!--Model-->
        <div class="modal fade" id="loginModal" role="dialog" style="z-index: 9999999">
                <div class="modal-dialog">
                    <!--Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" class="close" data-dismiss="modal">&times;</a>
                            <h4 class="modal-title">Login Here</h4>
                        </div>
                        <div class="modal-body">
                            <br>
                           
                                <div class="form-group has-feedback">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-user"></span>
                                        </span>
                                        <input type="text" title="Please enter your valid roll number" minlength="10" maxlength="12" class="form-control" name="txtuser" placeholder="Enter your roll number" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-lock"></span>
                                        </span>
                                        <input type="password" class="form-control" name="txtpass" placeholder="Enter your password" required minlength="8" maxlength="30"/>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" name="btnlogin" class="btn btn-success">Login</button>
                                </div>

                         
                        </div>
                        <div class="modal-footer" style="">
                            <a href="Forget_password.php" class="btn btn-default">Forget password</a>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
   </form>
<!--Login modal ends-->
    <nav class="navbar navbar-inverse navbar-fixed-top" style="border-radius: 0px;">
        <div class="container" style="padding-bottom: 0px;padding-top: 0px;">
			<div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" onclick="openNav()" style="float: left;margin-left: 20px;">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
                                <li id="hoverme"><a href="Gec_Xpress.php">Home</a></li>
                                <li id="hoverme"><a href="Our_Team/index.html">Our Team</a></li>
                                <!--<li id="hoverme"><a href="gallery.php">Gallery</a></li>-->
                                <li id="hoverme"><a href="News_view.php">News</a></li>
                                <?php if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
                                {?>
                                <li id="hoverme"><a href="Issue_view.php">Issue</a></li>
                                <li id="hoverme"><a href="Feedback_type.php">Feedback</a></li>
                                <?php }
                                elseif (isset ($_SESSION["admin_name"]) && isset ($_SESSION["admin_pass"])) {
                                    ?>
                                    <li id="hoverme"><a href="Issue_view.php">Issue</a></li>
                                    <li id="hoverme"><a href="Feedback_view.php">Feedback</a></li>
                                <?php
                                }
                                else{ ?>
                                <li id="hoverme"><a href='#' data-toggle='modal' data-target='#loginModal'>Issue</a></li>
                                <li id="hoverme"><a href='#' data-toggle='modal' data-target='#loginModal'>Feedback</a></li>
                                <?php } ?>
                                
			</ul>
			<ul class="nav navbar-nav navbar-right">
<!--				<li><a href="#" data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
                            
                            <?php
                            if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
                            {
                                //echo "<li><a href='Student_profile.php'><span class='glyphicon glyphicon-user'></span> My Profile</a></li>";
                                ?>
                                    <li id="hoverme"><a href="#" class="dropdown toggle" data-toggle="dropdown"><span class='glyphicon glyphicon-user'></span>
                                    <?php //echo $_SESSION["userid"];
                                        $qry_v="SELECT * FROM user_registration WHERE rollno=".$_SESSION["userid"];
                                        //echo $qry_v;
                                        $result_v=mysqli_query($con,$qry_v);
                                        $row_v=mysqli_fetch_array($result_v);
                                        echo $row_v["fname"];
                                    ?>
					<span class="caret"/>
                                        </a>
					<ul class="dropdown-menu">
                                            <li><a href="User_home.php">My Home</a></li>
                                            <li><a href="Student_profile.php">My Profile</a></li>
					</ul>
                                    </li>
                                <?php
                                echo"<li id='hoverme'><a href='Logout.php'>Logout <span class='glyphicon glyphicon-log-out'></span></a></li>";
                            }
                            elseif (isset($_SESSION["admin_name"]) && isset ($_SESSION["admin_pass"])) {
                                echo "<li id='hoverme'><a href='admin/Admin_home.php'><span class='glyphicon glyphicon-user'></span> Admin home</a></li>";
                                echo"<li id='hoverme'><a href='Logout.php'>Logout <span class='glyphicon glyphicon-log-out'></span></a></li>";
                        }
                            else
                            {
                                echo"<li id='hoverme'><a href='#' data-toggle='modal' data-target='#loginModal'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                            }
                            ?>			
                                
			</ul>
			</div>
		</div>
	</nav>
    <div class="header_top" ></div>
    <div class="row" style="margin-right:0px;padding-bottom: 0px;">
        <div class="container">
<!--            <div style="padding-left: 22px;font-family: Georgia, 'Times New Roman', 'Times, serif';text-decoration:none;font-size: 20px;padding-top:10px; ;padding-bottom:10px ;"><span style="font-size: 30px;">G</span>EC <span style="font-size: 30px;">X</span>PRESS</div>-->
            <a href="Gec_Xpress.php"><img src="images/logo2.jpg" class="img-responsive" style="height: 100px;"/></a>
        </div><div style="height: 1px; width: 100%;background-color: #ccc; "></div>
    </div>
    
<!--        Slide bar menu starts-->
<div id="mySidenav" class="sidenav" style="font-size: 10px;z-index: 6666666;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="text-decoration: none;">&times;</a>
    <a href="Gec_Xpress.php"  style="text-decoration: none;"><b>Home</b></a>
    <a href="Our_Team/index.html" style="text-decoration: none;"><b>Our Team</b></a>
    <a href="News_view.php"  style="text-decoration: none;"><b>News</b></a>
    <!--<a href="gallery.php" style="text-decoration: none;"><b>Gallery</b></a>-->
    <a href="Issue_view.php" style="text-decoration: none;"><b>Issue</b></a>
<!--            <a href="Feedback_type.php" style="text-decoration: none;">Feedback</a>-->
            <?php if((isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"]))){
                ?>
<a href="Feedback_view.php" style="text-decoration: none;"><b>Feedback</b></a>
                <?php
            }else{ ?>
<a href="Feedback_type.php" style="text-decoration: none;"><b>Feedback</b></a>
            <?php } ?>
            <?php if((isset($_SESSION["userid"]) && isset($_SESSION["password"])))
            {
                echo "
                    <a href='User_home.php' style='text-decoration:none;'>b>User Home</b></a>
                                    <a href='Logout.php' style='text-decoration:none;'><b>Logout</b></a>";
            }
            else
            {
                echo "<a href='#' data-toggle='modal' data-target='#loginModal' style='text-decoration:none;'><b>Login</b></a>";
            }
                    ?>
<!--            <a href="#" data-toggle="modal" data-target="#signupModal"  style="text-decoration: none;">Sign up</a>-->
        </div>
<!--        Slide bar menu ends-->


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>
<?php
}
?>