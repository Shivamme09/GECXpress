<?php session_start();
include '../gecdp.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="icon" href="../images/bulb_logo.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../style.css" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="row">              
                    <div class="text-center" style="">
                        <?php
                            if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
                            {
                            $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."';";
                            $result=mysqli_query($con,$qry);
                            $row=mysqli_fetch_array($result);            
                            }
                            if($row["photo"]){
                                ?>
                                    <img src='../studentphoto/<?php echo $row["photo"]; ?>' class='img-thumbnail' style='padding:2px;height:300px;width:250px;'>
                                    <?php
                            }else{
                        ?>
                        <img src='../studentphoto/<?php echo $_SESSION["imagename_profile"]; ?>' class='img-thumbnail' style='padding:2px;height:300px;width:250px;'>
                            <?php
                            }
                            ?>
                           <h2 class="text-center jumbotron" style="background-color: #e29f22;color:#fff;">Hello <?php echo $_SESSION["fname_profile"] ?> please confirm your profile</h2>                           
                        </div>
            </div>
            <table border="0" class="table">
                    <tbody>
                        <tr>
                            <td>Name:</td>
                            <td><?php echo $_SESSION["fname_profile"]." ".$_SESSION["lname_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Father Name:</td>
                            <td><?php echo $_SESSION["father_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Date of Birth:</td>
                            <td><?php echo $_SESSION["date_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?php echo $_SESSION["gender_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Email-id:</td>
                            <td><?php echo $_SESSION["email_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Mobile No.:</td>
                            <td><?php echo $_SESSION["mobile_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><?php echo $_SESSION["address_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Roll No.:</td>
                            <td><?php echo $_SESSION["roll_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Enrollment:</td>
                            <td><?php echo $_SESSION["enroll_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Semester:</td>
                            <td><?php echo $_SESSION["sem_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Branch:</td>
                            <td><?php echo $_SESSION["branch_profile"] ?></td>
                        </tr>
                        <tr>
                            <td>Achivements:</td>
                            <td><?php echo $_SESSION["achive_profile"] ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-center">
                                <form action="submit_profile.php" method="POST" enctype="multipart/form-data">
                                    <input type="submit" value="Cofirm" class="btn btn-lg btn-warning border_v" style="width: 200px;" name="btnconfirm">
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>

        </div>

    </body>
</html>
