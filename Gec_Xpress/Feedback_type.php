<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include './gecdp.php';
if((isset($_SESSION["userid"]) && isset($_SESSION["password"]))||(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"])))
{
    
if(isset($_REQUEST["btnsubmit"]))
{
    $title= htmlspecialchars($_REQUEST["txttitle"],ENT_QUOTES);
    $rate= htmlspecialchars($_REQUEST["rate"],ENT_QUOTES);
    $desc= htmlspecialchars($_REQUEST["txtdesc"],ENT_QUOTES);
    $feedback_type= htmlspecialchars($_REQUEST["txttype"],ENT_QUOTES);
    
    $qry="INSERT INTO feedback
        (student_id,feedback_title,feedback_rate,feedback_desc,added_on,feedback_type)
        VALUES
        ('".$_SESSION["userid"]."','".$title."','".$rate."','".$desc."',now(),'".$feedback_type."');
            ";
    if(mysqli_query($con,$qry))
    {
        ?>
        <script>
            alert('Thankyou for giving your valuable feedback!!!!');
            window.location.href="User_home.php";
        </script>
<?php
    }
    else
    {
        ?>
        <script>
            var str="<?php echo mysqli_error($con); ?>";  
            var res=str.replace(/'/g,"");

            alert(res);
        </script>
            <?php
    }
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback</title>
                <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .mar_bot
            {
                margin-bottom: 50px;
            }
          
          input:focus:invalid
          {
              border-color: #a94442;
              box-shadow:0 0px 6px #ce8483;
          }
          input:required:valid
          {
              border-color: #3c763d;
              box-shadow: 0px 0px 6px #67b168
          }
                textArea:focus:empty
                {
                    border-color: #a94442;
                    box-shadow:0 0px 8px #ce8483;
                }
                textArea:required:valid
                {
                    border-color: #3c763d;
                    box-shadow: 0px 0px 8px #67b168
                }
        </style>
    </head>
    <body>
        <?php include './header.php'; ?>
        
        <div class="row" style="padding-top: 50px;"></div>
    <div class="wrapper row3 center"  style="">
        <main class="hoc container clear"> 
          <!-- main body -->
          <div class="group center" style="">
              <a href="#" data-toggle="modal" data-target="#feedbackModal" style="color:#000;text-decoration: none;" >
              <article class="one_third first mar_bot"><i class="icon fa fa-google"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">About Gec Xpress</p></h4>
              
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#feedbackModal" style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-creative-commons"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">About Code Club</p></h4>
             
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#feedbackModal"  style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-university"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">About Institute</p></h4>
             
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#feedbackModal"  style="color:#000;text-decoration: none;">
              <article class="one_third first mar_bot"><i class="icon fa fa-users"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">About Teaching</p></h4>
              
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#feedbackModal"  style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa fa-map-signs"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">About Department</p></h4>
             
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#feedbackModal"  style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-file-text-o"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">About Notice Providing</p></h4>
             
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#feedbackModal"  style="color:#000;text-decoration: none;">
              <article class="one_third first mar_bot"><i class="icon fa fa-paper-plane"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Response of Issue</p></h4>
              
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#feedbackModal"  style="color:#000;text-decoration: none;">
            <article class="one_third mar_bot"><i class="icon fa fa-weixin"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Teacher Assesment</p></h4>
             
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#feedbackModal" style="color:#000;text-decoration: none;" >
            <article class="one_third mar_bot"><i class="icon fa fa-plus"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Other</p></h4>
             
            </article>
              </a>
              
          </div>
          <!-- / main body -->
        </main>
    </div>
                
  <!-- Modal -->
  <div class="modal fade" id="feedbackModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Give your Feedback</h4>
        </div>
        <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Feedback-Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Title" name="txttitle" required>
    </div>
<!--    <div class="form-group">
        <label class="control-lable">Feedback-Type:</label>
    </div>-->
    <div class="form-group">
      <label for="pwd">Rating:
	  <label class="radio-inline">
              <input type="radio" name="rate" value="Positive" checked="checked">Positive
    </label>
    <label class="radio-inline">
        <input type="radio" name="rate" value="Negative">Negative
    </label>
	</label>
    </div>
    <div class="form-group">
      <label for="comment">Feedback:</label>
      <textarea class="form-control"  name="txtdesc" rows="5" id="comment" required minlength="10" maxlength="1000"></textarea>
    </div> 
<div class="text-center">
            <input type="submit" class="btn btn-primary" name="btnsubmit"/>
        </div>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <?php include './footer.php'; ?>
    </body>
</html>
<?php
}
else{
    ?>
    <script>
        alert('Hello there you have to be logged in to access this page please first log in');
        window.location.href="Gec_Xpress.php";
    </script>    
    <?php
}
?>
