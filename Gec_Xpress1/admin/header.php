<?php session_start();
 include './gecdp.php';
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      
          body {
              font-family: "Lato", sans-serif;
          }
          
          input:focus:invalid
          {
              border-color: #a94442;
              box-shadow:0 0px 8px #ce8483;
          }
          input:required:valid
          {
              border-color: #3c763d;
              box-shadow: 0px 0px 8px #67b168
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
<!--Custom style ends-->

<!--Custom script starts-->



<!--Custom script ends-->
</style>
</head>
<body>
<!------>
<!-------->
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
                                <li><a href="../Gec_Xpress.php">Home</a></li>
                                <li><a href="../Our_Team/index.html">Our Team</a></li>
                                <li><a href="../gallery.php">Gallery</a></li>
                                <li><a href="../News_view.php">News</a></li>
                                <li><a href="../Issue_view.php">Issue</a></li>
                                <li><a href="../Feedback_view.php">Feedback</a></li>
                                
			</ul>
			<ul class="nav navbar-nav navbar-right">
<!--				<li><a href="#" data-toggle="modal" data-target="#signupModal"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
                            
                            <?php
                            if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"]))
                            {
                                //echo "<li><a href='Student_profile.php'><span class='glyphicon glyphicon-user'></span> My Profile</a></li>";
                                ?>
                                    <li><a href="#" class="dropdown toggle" data-toggle="dropdown">
                                    <?php //echo $_SESSION["userid"];
                                        $qry_v="SELECT * FROM admin WHERE admin_name='".$_SESSION["admin_name"]."'";
                                        //echo $qry_v;
                                        $result_v=mysqli_query($con,$qry_v);
                                        $row_v=mysqli_fetch_array($result_v);
                                        echo "Hello ";
                                        echo $row_v["admin_name"];
                                    ?>
                                        </a>
                                            <li><a href="Admin_home.php">Admin Home</a></li>
                                    </li>
                                <?php
                                echo"<li><a href='../Logout.php'>Logout <span class='glyphicon glyphicon-log-out'></span></a></li>";
                            }
                            else
                            {
                                echo"<li><a href='Admin_login.php' ><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
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
            <a href="../Gec_Xpress.php"><img src="images/logo2.jpg" class="img-responsive" style="height: 100px;"/></a>
        </div><div style="height: 1px; width: 100%;background-color: #ccc; "></div>
    </div>
    
<!--        Slide bar menu starts-->
<div id="mySidenav" class="sidenav" style="font-size: 10px;z-index: 6666666;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="text-decoration: none;">&times;</a>
    <a href="../Gec_Xpress.php"  style="text-decoration: none;">Home</a>
    <a href="../Our_Team/index.html" style="text-decoration: none;">Our Team</a>
            <a href="../News_view.php"  style="text-decoration: none;">News</a>
            <a href="../gallery.php" style="text-decoration: none;">Gallery</a>
            <a href="../Issue_view.php" style="text-decoration: none;">Issue</a>
            <a href="../Feedback_view.php" style="text-decoration: none;">Feedback</a>
            <?php if((isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"])))
            {
                echo "
                    <a href='Admin_home.php' style='text-decoration:none;'>Admin Home</a>
                                    <a href='../Logout.php' style='text-decoration:none;'>Logout</a>";
            }
            else
            {
                echo "<a href='Admin_login.php' style='text-decoration:none;'>Login</a>";
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