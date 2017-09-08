<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include './gecdp.php';
if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"])){
    
    if(isset($_REQUEST["trash"]) && isset($_REQUEST["trash"])=='yes'){
        $qry="SELECT * FROM user_registration WHERE trash='yes' ORDER BY id";
    }else{
        $qry="SELECT * FROM user_registration WHERE trash!='yes' ORDER BY id";
    }
    
    if(isset($_REQUEST["trash"]) && isset($_REQUEST["trash"])=='yes' && isset($_REQUEST["rollno"])){
        $qry_h="UPDATE user_registration SET trash='yes' WHERE rollno=".$_REQUEST["rollno"];
        if(mysqli_query($con, $qry_h)){
            ?>
            <script>
                alert('Moved to trash!!');
                window.location.href="view_student.php";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert('Currently there is a problem to delete the news please try again after some time!!');
            </script>
            <?php
        }
    }
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
                        <th>Achivements:</th>
                        <th>Delete:</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row= mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?php echo $row["rollno"]; ?></td>
                        <td><img src="../studentphoto/<?php echo $row["photo"]; ?>" class="img-responsive"/></td>
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
                        <td><a href="view_student.php?trash='yes'&AMP;&AMP;rollno=<?php echo $row["rollno"]; ?>">Delete</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <?php include './footer.php';
}else{
    header("location:admin_login.php");
}
        ?>
    </body>
</html>