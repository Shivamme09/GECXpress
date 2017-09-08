<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
 include './gecdp.php';
if((isset($_SESSION["userid"]) && isset($_SESSION["password"]))|| (isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"])))
{
    if(isset($_REQUEST["status"]) && isset($_REQUEST["issue_id"]) && $_REQUEST["false"]=='false')
    {
        $qry_m="DELETE FROM issues WHERE issue_id=".$_REQUEST["issue_id"];
        $result_m= mysqli_query($con, $qry_m);
        if($result_m)
        {
            ?>
            <script>
                alert('The issue is deleted successfully!!');     
                window.location.href="Issue_view.php";
            </script>
            <?php
        }
        else
        {
            ?><script>alert('Currently there is a problem to delete the issue please try agian!!');</script><?php
        }
    }
    if(isset($_REQUEST["status"]) && isset($_REQUEST["issue_id"])){
        $qry_h="UPDATE issues SET trash='yes' WHERE issue_id=".$_REQUEST["issue_id"];
    if(mysqli_query($con, $qry_h)){
        //echo "vikash";
        ?><script>alert('News is moved to trash!!');
                    window.location.href="Issue_view.php";
        </script><?php
    }
    }
    if(isset($_REQUEST["techsubmit"]))
    {
        $title= htmlspecialchars($_REQUEST["txttitle"],ENT_QUOTES);
        $product= htmlspecialchars($_REQUEST["txtproduct"],ENT_QUOTES);
        $desc= htmlspecialchars($_REQUEST["txtdesc"],ENT_QUOTES);
        $source_file=$_FILES["upfile"]["tmp_name"];
        //echo $source_file;
        $target_file="Issuephoto/".$_FILES["upfile"]["name"];
        //echo $target_file;
        if(move_uploaded_file($source_file, $target_file))
        {
            $imagename= htmlspecialchars($_FILES["upfile"]["name"],ENT_QUOTES);
        }
        $qry="INSERT INTO issues
            (student_id,issue_title,product_detail,issue_desc,issue_status,added_on,related_photo,issue_type)
            VALUES
            ('".$_SESSION["userid"]."','".$title."','".$product."','".$desc."','OPEN',now(),'".$imagename."','Technical')
                ";
        //echo $qry;
        if(mysqli_query($con,$qry))
        {
            ?>
            <script>
            alert('Your Issue is sent sucessfully!!!!');
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
    else if (isset($_REQUEST["missubmit"]))
    {
         $title= htmlspecialchars($_REQUEST["txttitle"],ENT_QUOTES);
         $desc= htmlspecialchars($_REQUEST["txtdesc"],ENT_QUOTES);
         //echo $_REQUEST["upfile"];
         $source_file=$_FILES["upfile"]["tmp_name"];
         echo $source_file;
         $target_file="Issuephoto/".$_FILES["upfile"]["name"];
         echo $target_file;
         if(move_uploaded_file($source_file, $target_file))
         {
             $imagename= htmlspecialchars($_FILES["upfile"]["name"],ENT_QUOTES);
         }
         $qry="INSERT INTO issues
                (student_id,issue_title,issue_desc,issue_status,added_on,related_photo,issue_type)
                VALUES
                ('".$_SESSION["userid"]."','".$title."','".$desc."','OPEN',now(),'".$imagename."','Miscellaneous')
                 ";
         if(mysqli_query($con,$qry))
         {
             ?>
            <script>
            alert('Your Issue is sent sucessfully!!!!');
            window.location.href="Issue_view.php";
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
        <title>Issues</title>
        <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         
    </head>
    <body>
        <?php
            include './header.php';
        ?>
        
        <div class="row" style="padding-top: 50px;"></div>
        <?php  ?>
    <div class="wrapper row3 center"  style="margin-bottom: 50px;">
        <main class="hoc container clear"> 
<?php if(isset($_SESSION["userid"]) && isset($_SESSION["password"])){?>
          <!-- main body -->
          <div class="group center" style="">
              <a href="#" data-toggle="modal" data-target="#myModal" style="color:#000;text-decoration: none;">
              <article class="one_half"><i class="icon fa fa-paper-plane"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Send Technical Issue</p></h4>
              
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#myModal2" style="color:#000;text-decoration: none;" >
            <article class="one_third"><i class="icon fa fa-paper-plane"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Send Miscellaneous Issue</p></h4>
             
            </article>
              </a>
              
          </div>
<?php }?>
          <!-- / main body -->
        </main>
    </div>
        <?php
        if(isset($_SESSION["userid"]) && isset($_SESSION["password"])){
        $qry="SELECT * FROM issues WHERE student_id='".$_SESSION["userid"]."' AND trash!='yes' ORDER BY added_on desc ;";
        }elseif(isset ($_REQUEST["trash"]) == 'yes'){
            $qry="SELECT * FROM issues WHERE trash='yes' ORDER BY added_on desc ;";
        }else{
           $qry="SELECT * FROM issues WHERE trash!='yes' ORDER BY added_on desc ;"; 
        }
//        echo $qry;
        $result=mysqli_query($con,$qry);
        while($row=mysqli_fetch_array($result))
        {
            ?>
        <div class="container" style="margin-bottom: 50px;">
            <a href="Single_issue.php?issue_id=<?php echo $row["issue_id"] ?>" style="text-decoration: none;">
                <div class="row" style="border:1px solid #AEADAE;">
                    <div class="col-md-3" style="padding: 0px;"><img style="min-height:180px;max-height: 180px;" src="Issuephoto/<?php echo $row["related_photo"]?>" alt="Issue related pic" class="img-responsive"/></div>
                    <div class="col-md-9" style="padding-top: 30px;padding-bottom: 30px;font-size: 40px;"><?php echo $row["issue_title"] ?></div>
                </div>
                <div class="row" style="border:1px solid #AEADAE;padding: 15px;border-top: 0px;">
                    <div class="col-md-4" >Date & time  of posted:&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#6B6A6B;"><?php echo $row["added_on"] ?></span></div>
                    <div class="col-md-4" >Type of Issue:&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#6B6A6B;"><?php echo $row["issue_type"] ?></span></div>
                    <div class="col-md-4">Status:&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#6B6A6B;"><?php echo $row["issue_status"] ?></span></div>
                </div>
            </a>
        </div>
        <?php
        }
        ?>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Issue(Technical)</h4>
                </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="email">Issue-Title:</label>
                      <input type="" class="form-control" id="email" placeholder="Enter Title" name="txttitle" required>
                    </div>
                <div class="form-group">
                    <label for="pwd">Product-Description:</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Enter Description" name="txtproduct" required>
                </div>
                <div class="form-group">
                    <label for="comment">Issue-Description:</label>
                    <textarea class="form-control" rows="5" id="comment" name="txtdesc" required minlength="10" maxlength="1000"></textarea>
                </div> 
                    <div style="float: left">
                    <input type="file" name="upfile" accept="" required/>
                    </div><br><br><br>
                    <div class="text-center">
                    <input type="submit" class="btn btn-primary" name="techsubmit" />
                    </div>
                </form>       
            </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
		 <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Issue(Non-technical)</h4>
        </div>
        <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="email">Issue-Title:</label>
                  <input type="text" class="form-control" id="email" placeholder="Enter Title" name="txttitle" required>
                </div>
                <div class="form-group">
                  <label for="comment">Issue-Description:</label>
                  <textarea class="form-control" rows="5" id="comment" name="txtdesc" required minlength="10" maxlength="1000"></textarea>
                </div> 
                <span id="fileselector">
                    <label class="">
                        <input type="file" name="upfile" accept="" required>
                    </label>
                </span><br><br><br>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" name="missubmit">
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
else
{
    ?>
        <script>
            alert('Hello there you have to be logged in to access this page please first log in');
            window.location.href="Gec_Xpress.php";
        </script>
    <?php
}
?>
