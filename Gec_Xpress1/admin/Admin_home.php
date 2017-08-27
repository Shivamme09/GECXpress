<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);

if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"]))
{

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Home Page</title>        
        <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="../style.css" type="text/css"/>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>
<!--        <a href="Post_news.php">Post Notice</a>
        <a href="../News_view.php">View News</a>
        <a href="../Issue_view.php">View Issue</a>
        <a href="../Feedback_view.php">View Feedback</a>
        <a href="Admin_registration.php">Register Admin</a>
        <a href="#">Register Faculty</a>
        <a href="#">Register Student</a>
        <a href="../Logout.php">Logout</a>-->
        
        <div class="wrapper row3 center"  style="margin-top: 50px;margin-bottom: 50px;">
        <main class="hoc container clear"> 
          <!-- main body -->
          <div class="group center" style="">
              <a href="Post_news.php" style="color:#000;text-decoration: none;" >
              <article class="one_third first mar_bot"><i class="icon fa fa-plus"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Post News</p></h4>
              
            </article>
              </a>
              <a href="../News_view.php" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-file-text-o"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">View News</p></h4>
             
            </article>
              </a>
              <a href="../Issue_view.php" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-exclamation"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">View Issue</p></h4>
             
            </article>
              </a>
              <a href="../Feedback_view.php" style="color:#000;text-decoration: none;">
              <article class="one_third first mar_bot"><i class="icon fa fa-comments-o"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">View Feedback</p></h4>
              
            </article>
              </a>
              <a href="Admin_registration.php" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-user-plus"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Register Admin</p></h4>
             
            </article>
              </a>
              <a href="../commingsoon/index.html" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-users"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Register Faculty</p></h4>
             
            </article>
              </a>
              <a href="register_student.php" style="color:#000;text-decoration: none;">
              <article class="one_third first mar_bot"><i class="icon fa fa-graduation-cap"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Register Student</p></h4>
              
            </article>
              </a>
              <a href="view_student.php" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-graduation-cap"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">View Registered student</p></h4>
             
            </article>
              </a>
              <a href="../Logout.php" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-sign-out"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Logout</p></h4>
             
            </article>
              </a>
              
          </div>
          <!-- / main body -->
        </main>
    </div>
    
        <?php include './footer.php'; ?>
    </body>
</html>
<?php
}
else
{
    header("Location:Admin_login.php");
}
?>
