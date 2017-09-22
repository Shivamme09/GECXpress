<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include './gecdp.php';
if(isset($_SESSION["userid"]) && $_SESSION["password"])
{
    $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."' AND password='".$_SESSION["password"]."'";
    //echo $qry;
    $result=mysqli_query($con,$qry);
    $row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Profile</title>
                <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css"/>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <style>
          </style>
    </head>
    <body>
        <?php
        include './header.php';
        ?>
        <div class="container">
            <div class="row">              
                    <div class="text-center" style="">
                        <?php
                        if($row["photo"]){
                            echo "<img src='studentphoto/" . $row["photo"] . "' class='img-thumbnail' style='padding:2px;height:300px;width:250px;'>";
                        }else {
                            echo "<img src='studentphoto/av1.png' class='img-thumbnail' style='padding:2px;height:300px;width:250px;'>";
                        }
                            ?>
                           <input type="hidden" name="imagename2" value="<?php echo $imagename; ?>"/>
                           <h2 class="text-center jumbotron" style="background-color: #e29f22;color:#fff;">Hello <?php echo $row["fname"]; ?></h2>
                           
                        </div>
            </div>
            <table border="0" class="table">
                    <tbody>
                        <tr>
                            <td>Name:</td>
                            <td><?php echo $row["fname"]; echo" "; echo $row["lname"]; ?></td>
                        </tr>
                        <tr>
                            <td>Father Name:</td>
                            <td><?php echo $row["fathername"] ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $row["dob"] ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $row["gender"] ?></td>
                        </tr>
                        <tr>
                            <td>Email-id:</td>
                            <td><?php echo $row["emailid"] ?></td>
                        </tr>
                        <tr>
                            <td>Mobile No.:</td>
                            <td><?php echo $row["mobileno"] ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><?php echo $row["address"] ?></td>
                        </tr>
                        <tr>
                            <td>Roll No.:</td>
                            <td><?php echo $row["rollno"] ?></td>
                        </tr>
                        <tr>
                            <td>Enrollment:</td>
                            <td><?php echo $row["enrollment"] ?></td>
                        </tr>
                        <tr>
                            <td>Semester:</td>
                            <td><?php echo $row["semester"] ?></td>
                        </tr>
                        <tr>
                            <td>Branch:</td>
                            <td><?php echo $row["branch"] ?></td>
                        </tr>
                        <tr>
                            <td>Achivements:</td>
                            <td><?php echo $row["achive"] ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center"><a href="student_profile/profile1.php" class="btn btn-warning" style="padding: 15px;border-radius: 30px;width: 250px;margin-top: 40px;">Edit My Profile</a></td>
                        </tr>
                    </tbody>
                </table>

        </div>
    </body>
</html>
<?php
include './footer.php';
}
else
{
    header("Location:Gec_Xpress.php");
}
?>