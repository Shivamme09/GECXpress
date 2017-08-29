<?php  session_start();
if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"]))
{
include 'gecdp.php';
?>
<?php
if(isset($_REQUEST["submit"]))
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
      $expr=$_REQUEST["txtexpr"];
      $subject=$_REQUEST["txtsub"];
      $rsrch=$_REQUEST["txtrsrch"];
  
     // $postedby=$_REQUEST["poster"];
      $qry_s="INSERT INTO faculty_profile
                (fname,department,qualification,image,experience,subject,researcharea)
                VALUES
                ('".$fname."','.$dptid.','".$qwl."','".$imagename1."','".$expr."','".$subject."','".$rsrch."')";
       
       // echo $qry;
       $result= mysqli_query($con, $qry_s);
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
<!DOCTYPE>
<html>
    <?php
if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
{
    echo '<title>Update</title>';
}  else {
    echo '<title>Registration</title>';
}
    ?>
    <head>
    </head>
    <?php
    if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
{
include'gecdp.php';
$qry="Select * from faculty_profile WHERE fid=".$_REQUEST["id"];
$result_m= mysqli_query($con, $qry);
$row_m= (mysqli_fetch_array($result_m));
?>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                
                <tr><td>Name:</td> 
                <td> <input type="text" name="name"
                            <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "value='".$row_m["fid"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>  >
                </td>
                </tr>
                <tr><td>Department:</td> 
                    <td><select name="dpt"> 
                    <?php
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "<option value='".$row_m["fid"]."'>" .$row_m["department"]."</option>";
                }
                else
                {
                                                 include './gecdp.php';
                                                $qry_b = "SELECT * FROM branch ORDER BY bid";
                                                $result_b = mysqli_query($con,$qry_b);
                                                while ($row_b = mysqli_fetch_array($result_b)){
                     echo"<option value='" . $row_b["bname"] . "'>" . $row_b['bname'] . "</option>";
                }
                                                }
                ?>
                                                
                     
                                    
                        </select>
                    </td>
                </tr>
                <tr><td>Qualification:</td> 
                    <td><input type="text" name="txtqwl"
                                <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "value='".$row_m["qualification"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>   > </td>
                </tr>
                <tr><td>Image:</td> 
                <td><input type="file" name="upfile" > </td>
                </tr>
                <tr><td>Experience:</td> 
                <td><input type="text" name="txtexpr"
                            <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "value='".$row_m["experience"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>
                           > </td>
                </tr>
                <tr><td>Subject thought's:</td> 
                <td><input type="text" name="txtsub"
                            <?php 
                if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
                {
                echo "value='".$row_m["subject"]."'";
                }
                else
                {
                    echo"value=''";
                }
                ?>
                           > </td>
                </tr>
                <tr><td>Research Area:</td> 
                <td><textarea name="txtrsrch" rows="5" cols="20" value=""><?php echo $row_m["researcharea"]?></textarea></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
{
    echo ' <input type="submit" name="update" value="Update"> ';
}
 else {
    echo ' <input type="submit" name="submit" value="Register"> ';
}
                                
                                ?>
                        </td>
                </tr>
            </table>
        </form>
    </body>
    
</html>

<?php
if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="edit")
{
   include'gecdp.php';
   $qry="SELECT * FROM faculty_profile WHERE fid=".$_REQUEST["id"];
   $result= mysqli_query($con,$qry);
   $row= mysqli_fetch_array($result);

}
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
      $expr=$_REQUEST["txtexpr"];
      $subject=$_REQUEST["txtsub"];
      $rsrch=$_REQUEST["txtrsrch"];
  
     // $postedby=$_REQUEST["poster"];
      
        $qry="UPDATE faculty_profile SET
            fname='".$fname."',department='".$dptid."',qualification='".$qwl."',image='".$imagename1."',experience='".$expr."',subject='".$subject."',researcharea='".$rsrch."'
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

    }
?>

<?php

                    }
                    else
                        {
                        header("Location:Admin_login.php");
                        
                         }
?>
