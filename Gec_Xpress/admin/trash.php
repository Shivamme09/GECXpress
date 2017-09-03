<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);

if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"]) && isset($_SESSION["admin_type"]))
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
<!--<div class="" style="">
    <div class="jumbotron" style="background-color: #3A3A3A;color: #fff;">
        <h2 class="text-center" style="font-size: 50px;">Dashboard</h2>
    </div>
</div>-->
        <div class="wrapper row3 center"  style="margin-top: 50px;margin-bottom: 50px;">
        <main class="hoc container clear"> 
          <!-- main body -->
          <div class="group center" style="">
              <a href="../News_view.php?trash='yes'" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot first"><i class="icon fa fa-file-text-o"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">News</p></h4>
             
            </article>
              </a>
              <a href="../Issue_view.php?trash='yes'" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-exclamation"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Issue</p></h4>
             
            </article>
              </a>
              <a href="../Feedback_view.php?trash='yes'" style="color:#000;text-decoration: none;">
              <article class="one_third mar_bot"><i class="icon fa fa-comments-o"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Feedback</p></h4>
              
            </article>
              </a>
              <a href="view_admin.php?admin_type=HOD&&trash='yes'" style="color:#000;text-decoration: none;">
              <article class="one_third first mar_bot"><i class="icon fa fa-user-secret"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">HOD</p></h4>
              
            </article>
              </a>
              <a href="view_admin.php?admin_type=Faculty&&trash='yes'" style="color:#000;text-decoration: none;">
              <article class="one_third mar_bot"><i class="icon fa fa-users"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Faculty</p></h4>
              
            </article>
              </a>
              </a>
              <a href="Edit_news_type.php?trash='yes'" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-anchor"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">News type</p></h4>
             
            </article>
              </a>
              <a href="view_admin.php?admin_type=Administrative&&trash='yes'" style="color:#000;text-decoration: none;">
              <article class="one_third first mar_bot"><i class="icon fa fa-user-md"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Administrative officers</p></h4>
              
            </article>
              </a>
              
              <a href="view_student.php?trash='yes'" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-graduation-cap"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Student</p></h4>
             
            </article>
              </a>
              <?php if(($_SESSION["admin_type"]=='Principal') || ($_SESSION["admin_type"]=='HOD')){ ?>
              <a href="Edit_branch.php?trash='yes'" style="color:#000;text-decoration: none;">
              <article class="one_third mar_bot"><i class="icon fa fa-map-signs"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Department</p></h4>
              
            </article>
              </a>
              <?php }?>           
              <!--<hr style="color: #fff;background-color: #fff;">-->
              <div class="row"></div>
              <div style="margin-top:150px;">
                  <hr>
              <a href="../Logout.php" style="color:#000;text-decoration: none;">
            <article class="two_quarter first mar_bot"><i class="icon fa fa-sign-out"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Logout</p></h4>
             
            </article>
              </a>
              </div>
              
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
