<?php
include 'gecdp.php';
if(isset($_REQUEST["btnsubmit"]))
    {
    $fname=$_REQUEST["name"];
     $dptid=$_REQUEST["dpt"];
     $qwl=$_REQUEST["txtqwl"];
      //$img=$_REQUEST["upfile"];
      $source_file=$_FILES["upfile"]["tmp_name"];
        $target_file="facultyimage/".$_FILES["upfile"]["name"];
        if(move_uploaded_file($source_file, $target_file))
        {
            $imagename1=$_FILES["upfile"]["name"];
        }
      $expr=$_REQUEST["expr"];
      $subject=$_REQUEST["sub"];
      $rsrch=$_REQUEST["rsrch"];
  $mobile=$_REQUEST["mob"];
  $mail=$_REQUEST["mail"];
     // $postedby=$_REQUEST["poster"];
      $qry_s="INSERT INTO faculty_profile
                (fname,department,qualification,image,experience,subject,researcharea,email,mobile)
                VALUES
                ('".$fname."','.$dptid.','".$qwl."','".$imagename1."','".$expr."','".$subject."','".$rsrch."','".$mail."','".$mobile."')";
       
       // echo $qry_s;
       $result=mysqli_query($con, $qry_s);
    if($result)
    {
        ?>
            <script>
                alert("Registration Complete");
            </script>    
        <?php
    }
    else{
        ?>

            <script type='text/javascript'>
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
         <?php
if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
{
    echo '<title>Update details</title>';
    include'gecdp.php';
$qry="Select * from faculty_profile WHERE fid=".$_REQUEST["id"];
$result_m= mysqli_query($con, $qry);
$row_m= (mysqli_fetch_array($result_m));
}
else {
    echo '<title>Add Teacher</title>';
}
    ?>
        <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css"/>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label">Select department:</label>      
                    <select name="dpt" class="form-control">
                       
                        <?php
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "<option value='".$row_m["department"]."'>" .$row_m["department"]."</option>";
                include './gecdp.php';
                                                $qry_b = "SELECT * FROM branch ORDER BY bid";
                                                $result_b = mysqli_query($con,$qry_b);
                                                while ($row_b = mysqli_fetch_array($result_b)){
                     echo"<option value='" . $row_b["bname"] . "'>" . $row_b['bname'] . "</option>";
                                                }
                }
                else
                {
                     echo'<option value="">Select branch</option>';
                                                 include './gecdp.php';
                                                $qry_b = "SELECT * FROM branch ORDER BY bid";
                                                $result_b = mysqli_query($con,$qry_b);
                                                while ($row_b = mysqli_fetch_array($result_b)){
                     echo"<option value='" . $row_b["bname"] . "'>" . $row_b['bname'] . "</option>";
                }
                                                }
                ?>
                 <?php
                 
                   
                        //  $qry_c = "SELECT * FROM branch ORDER BY bid";
                        //$result_c = mysqli_query($con,$qry_c);
                       // $i=1;
                      //  while ($row_c = mysqli_fetch_array($result_c)) {
                            //echo"<option value='" . $row_c['bname'] . "'>" . $row_c['bname'] . "</option>";
                            //if($i==5)
                          //      break;
                         //   $i++;
                          //  }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Teacher Name:</label>
                    <input type="text" name="name" placeholder="Enter name" class="form-control"
                           <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "value='".$row_m["fname"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/>
                </div>
                <div>
                    <label class="control-label">Image:</label>
                    <input type="file" name="upfile"  class="form-control"/>
                </div>
                <div class="form-group">
                    <label class="conrol-lable">Email id:</label>
                    <input type="email" name="mail" placeholder="Enter email id" class="form-control"
                           <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "value='".$row_m["email"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/>
                </div>
          
                <div class="form-group">
                    <label class="conrol-lable">Phone number of Teacher:</label>
                    <input type="number" name="mob" placeholder="Enter mobile number" class="form-control"
                           <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "value='".$row_m["mobile"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/>
                </div>
                <div class="form-group">
                    <label class="control-label">Qualification:</label>
                    <input type="text" name="txtqwl" placeholder="Enter Qualification" class="form-control"
                           <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "value='".$row_m["qualification"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/>
                </div>
                <div class="form-group">
                    <label class="control-label">Experience:</label>
                    <input type="text" name="expr" placeholder="In Years" class="form-control"
                           <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "value='".$row_m["experience"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/>
                </div>
                <div class="form-group">
                    <label class="control-label">Subject thought's:</label>
                    <input type="text" name="sub" placeholder="Enter subject name" class="form-control"
                           <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "value='".$row_m["subject"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>/>
                </div>
                <div class="form-group">
                    <label class="control-label">Research Area:</label>
                    <textarea name="rsrch"  class="form-control">
                        <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                    echo $row_m["researcharea"];
} 
else
    {
    
                    echo"";
        }?>
                    </textarea>
                </div>
                <div class="form-group text-center">
                    <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo '<input type="submit" name="update" value="update" class="btn btn-lg btn-success"/>';
                }
                else
                {
                    echo'<input type="submit" name="btnsubmit" class="btn btn-lg btn-success"/>';
                }
                ?>
                    
                </div>
            </form>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>


<!--Update-->
<?php
if(isset($_REQUEST["update"]))
    {
    $fname=$_REQUEST["name"];
     $dptid=$_REQUEST["dpt"];
     $qwl=$_REQUEST["txtqwl"];
      //$img=$_REQUEST["upfile"];
      $source_file=$_FILES["upfile"]["tmp_name"];
        $target_file="facultyimage/".$_FILES["upfile"]["name"];
        if(move_uploaded_file($source_file, $target_file))
        {
            $imagename1=$_FILES["upfile"]["name"];
        }
      $expr=$_REQUEST["expr"];
      $subject=$_REQUEST["sub"];
      $rsrch=$_REQUEST["rsrch"];
   $mobile=$_REQUEST["mob"];
  $mail=$_REQUEST["mail"];
     // $postedby=$_REQUEST["poster"];
      
        $qry="UPDATE faculty_profile SET
            fname='".$fname."',email='".$mail."',mobile='".$mobile."',department='".$dptid."',qualification='".$qwl."',image='".$imagename1."',experience='".$expr."',subject='".$subject."',researcharea='".$rsrch."'
            WHERE fid=".$_REQUEST["id"].";";
       // echo $qry;
       $result= mysqli_query($con, $qry);
    if($result)
    {
        ?>
            <script>
                alert("Successfully updated your Data");
            </script>    
        <?php
    }
    else{
        ?>
            
 
            <script type='text/javascript'>
    var str="<?php echo mysqli_error($con); ?>";  
    var res=str.replace(/'/g,"");
    
    alert(res);
            </script>
            <?php
    }

}

    
?>