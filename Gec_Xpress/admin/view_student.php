<?php  session_start();
if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"]))
{
include './gecdp.php';
$qry="SELECT * FROM user_registration ORDER BY id";
$result= mysqli_query($con, $qry);
?>
<!Doctype html>
<html>
    <head>
        <title>View Student</title>
        <meta charset="utf-8">
        <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container-fluid table-responsive" style="margin-top: 50px;margin-bottom: 50px;">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Roll number:</th>
                        <th>Photo:</th>
                        <th>First Name:</th>
                        <th>Last Name:</th>
                        <th>Enrollment No:</th>
                        <th>Father's Name:</th>
                        <th>Email id:</th>
                        <th>Branch:</th>
                        <th>Semester:</th>
                        <th>Date of birth:</th>
                        <th>Gender:</th>
                        <th>Mobile No:</th>
                        <th>Address:</th>
                        <th>Achievements:</th>
<!--                        <th>Update</th>
                        <th>Delete</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php while($row= mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?php echo $row["rollno"]; ?></td>
                        <td><img src=".../studentphoto/<?php echo $row["photo"]; ?>" class="img-responsive"/></td>
                        <td><?php echo $row["fname"]; ?></td>
                        <td><?php echo $row["lname"]; ?></td>
                        <td><?php echo $row["enrollment"]; ?></td>
                        <td><?php echo $row["fathername"]; ?></td>
                        <td><?php echo $row["emailid"]; ?></td>
                        <td><?php echo $row["branch"]; ?></td>
                        <td><?php echo $row["semester"]; ?></td>
                        <td><?php echo $row["dob"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["mobileno"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["achive"]; ?></td>
<!--                        <td class="text-center"><a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td class="text-center"><a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-trash"></span></a></td>-->
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>
<?php

                    }
                    else {
                        header("Location:Admin_login.php");
                        
                    }
?>