<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
 include './gecdp.php';
if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"]))
{
    if(isset($_REQUEST["status"]) && isset($_REQUEST["feedback_id"]) && $_REQUEST["false"]=='false')
    {
        $qry_y="DELETE FROM feedback WHERE feedback_id=".$_REQUEST["feedback_id"];
        $result= mysqli_query($con, $qry_y);
        if($result)
        {
            ?><script>alert("Feedback is deleted succesfully!!");</script><?php
        }
        else
        {
            ?><script>alert("Currently we are not able to delete the Feedback. Try after some time");</script><?php
        }
    }
    if(isset($_REQUEST["status"]) && isset($_REQUEST["status"])=='delete' && isset($_REQUEST["feedback_id"])){
        $qry_h="UPDATE feedback SET trash='yes' WHERE feedback_id=".$_REQUEST["feedback_id"];
        //echo $qry_h;
    if(mysqli_query($con, $qry_h)){
        //echo "vikash";
        ?><script>alert('Feedback is moved to trash!!');
                    window.location.href="Feedback_view.php";
        </script><?php
    }else{
        ?><script>alert('Currently there is a problem to delete the news please try again after some time!!');</script><?php
    }
    }
    
    
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
            alert('Your feedback is sent sucessfully!!!!');
            window.location.href="Feedback_view.php";
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
        <title>Feedback View</title>
                <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link rel="stylesheet" href="css\bootstrap.min.css">
        <script src="js\bootstrap.min.js"></script>
        <script src="jquery\jquery-3.2.1.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <?php include './header.php';?>
        <div class="container" style="margin-top: 100px;">
            <?php if(isset($_SESSION["userid"])&& isset($_SESSION["password"]))
            {?>
            <?php }?>
            <?php
                if(isset($_REQUEST["trash"])=='yes'){
                    $qry="SELECT * FROM feedback WHERE trash='yes' ORDER BY added_on";
                }else{
                    $qry="SELECT * FROM feedback WHERE trash!='yes' ORDER BY added_on";
                }
                $result=mysqli_query($con,$qry);
                while($row=mysqli_fetch_array($result))
                {
                    ?>
            <div style="margin-bottom: 50px;">
                <a href="Single_feedback.php?feedback_id=<?php echo $row["feedback_id"]; ?>" style="text-decoration: none;"><b>
                <div class="row" style="border:1px solid #AEADAE;">
                    <div class="col-md-3" style="padding: 0px;"><img style="min-height: 180px;" src="images/feedback.jpg" class="img-responsive"/></div>
                    <div class="col-md-9" style="padding-top: 30px;padding-bottom: 30px;font-size: 40px;"><?php echo $row["feedback_title"]; ?></div>
                </div>
                <div class="row" style="border:1px solid #AEADAE;padding: 15px;border-top: 0px;">
                    <div class="col-md-3" style="color:#000;">FEEDBACK DATE & TIME:</div>
                    <div class="col-md-9" style="color:#6B6A6B;"><?php echo $row["added_on"]?></div>                    
                </div></b>
            </a>
            </div>
                    <?php
                }
    ?>
        </div>
<!--        feedback send-->


  <!-- Modal -->
  <div class="modal fade" id="feedbackModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Feedback(Miscellaneous)</h4>
        </div>
        <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Feedback-Title:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Title" name="txttitle">
    </div>
    <div class="form-group">
        <label class="control-lable">Feedback-Type:</label>
<!--	  <h6></h6>
	   <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Type
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Type1</a></li>
              <li><a href="#">Type2</a></li>
              <li><a href="#">Type3</a></li>
              <li><a href="#">Type4</a></li>
              <li><a href="#">Type5</a></li>
            </ul>
            </label>
            </div> -->
        
    <select name="txttype" class="form-control">
        <option value="">Select type</option>
        <?php
            $qry_q="SELECT * FROM feedback_title ORDER BY fid";
            $result_q=mysqli_query($con,$qry_q);
            while($row_q=mysqli_fetch_array($result_q))
            {
                echo "<option>".$row_q["ftitle"]."</option>";
            }
        ?>
    </select>


    </div>
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
  <textarea class="form-control"  name="txtdesc" rows="5" id="comment"></textarea>
    </div> 
        <div>
            <input type="submit" name="btnsubmit"/>
        </div>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


<!--feedback send end-->
    </body>
</html>
<?php
}
else
{
    ?>
    <script>
        alert('Hello there you have to be logged in to access this page please first log in');
        window.location.href="admin/admin_login.php";
    </script>    
    <?php
}
        include './footer.php';
?>
