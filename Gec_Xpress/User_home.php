<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
if(isset($_SESSION["userid"]) && $_SESSION["password"])
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Home</title>
                <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--  Custom style starts-->
  
  <style>
  </style>
    </head>
    <body>
        <div style="padding-bottom: 50px;">
        <?php
        include './header.php';
        include './Slider.php';
        
        ?>
        </div>
        <div style="padding-top: 50px;"></div>
    <div class="wrapper row3 center"  style="">
        <main class="hoc container clear"> 
          <!-- main body -->
          <div class="group center" style="">
              <a href="News_view.php"  style="color:#000;text-decoration: none;">
            <article class="one_quarter first"><i class="icon fa fa-file-text-o"></i>
                <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">News</p></h4>
              
            </article>
              </a>
              <a href="Issue_view.php" style="color:#000;text-decoration: none;">
            <article class="one_quarter"><i class="icon fa fa-paper-plane"></i>
                <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Issue</p></h4>
             
            </article>
              </a>
              <a href="Feedback_type.php" style="color:#000;text-decoration: none;">
            <article class="one_quarter"><i class="icon fa fa-commenting-o"></i>
                <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Feedback</p></h4>
             
            </article>
              </a>
              <a href="departments.php" style="color:#000;text-decoration: none;">
              <article class="one_quarter"><i class="icon fa fa-map-signs"></i>
                <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Department</p></h4>
             
            </article>
              </a>
              <a href="Student_profile.php" style="color:#000;text-decoration: none;">
            <article class=""><i class="icon fa fa-user"></i>
                <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">YOur Profile</p></h4>
             
            </article>
              </a>
          </div>
          <!-- / main body -->
        </main>
    </div>
        <div class="row" style="padding-bottom: 50px;"></div>
        <?php
            $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."'";
            //echo $qry;
            $result=mysqli_query($con,$qry);
            $row=mysqli_fetch_array($result);
            //echo $row["branch"];
            $qry_s="SELECT * FROM news WHERE (dept_name LIKE '%".$row["branch"]."%' OR dept_name LIKE '%For all%') AND trash!='yes'";
            //echo $qry_s;
            $result_s=mysqli_query($con,$qry_s);
            while($row_s=mysqli_fetch_array($result_s))
            {
                ?>
                <div class="container" style="margin-bottom: 50px;">
                    <a href="Single_news.php?news_id=<?php echo $row_s["news_id"] ?>" style="text-decoration: none;">
                        <div class="row" style="border:1px solid #AEADAE;">
                            <div class="col-md-3" style="padding: 0px;"><img style="min-height: 180px;max-height: 180px;" src="News/<?php echo $row_s["related_photo"]?>" alt="News related pic"class="img-responsive"/></div>
                            <div class="col-md-9" style="padding-top: 30px;padding-bottom: 30px;font-size: 40px;"><?php echo $row_s["news_title"] ?></div>
                        </div>
                        <div class="row" style="border:1px solid #AEADAE;padding: 15px;border-top:0px;">
                            <div class="col-md-6" >Date & time  of posted:<span style="color:#6B6A6B;"><?php echo $row_s["added_on"] ?></span></div>
                            <div class="col-md-6">Last Date & Time:<span style="color:#6B6A6B;"><?php echo $row_s["last_date"] ?></span></div>
                        </div>
                    </a>
                </div>    
                <?php
            }
                include './footer.php';
        ?>
    </body>
</html>
<?php
}
else
{
    header("Location:Gec_Xpress.php");
}
?>
