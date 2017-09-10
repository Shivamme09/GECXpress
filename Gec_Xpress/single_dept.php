<?php
include './gecdp.php';
?>
<!DOCTYPE html>
<html>
    <head>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <title></title>
        <link rel="icon" href="images/bulb_logo.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container">
        <?php
        $qry_dept="SELECT * FROM branch WHERE bid=".$_REQUEST["branchid"];
        $result_dept= mysqli_query($con, $qry_dept);
        $row_dept= mysqli_fetch_array($result_dept);
        $qry_hod="SELECT * FROM faculty_profile WHERE type='HOD' AND department='".$row_dept["bname"]."'";
        $result_hod= mysqli_query($con, $qry_hod);  
        ?>
            <div class="row">
            <?php
        while($row_hod= mysqli_fetch_array($result_hod)){
        ?>
            <div style="border: 1px solid #ccc;float: left;width: 230px;margin:30px;margin-left: 0px;border-radius: 0px 0px 20px 20px;" class="text-center">
                <img src="admin/facultyimage/<?php echo $row_faculty["image"]; ?>" style="height: 230px;width: 230px;">
                <hr>
                <h4><?php echo $row_hod["fname"]; ?></h4>
                <h3><?php echo $row_hod["department"]; ?></h3>
                <h4><?php echo $row_hod["subject"]; ?></h4>
            </div>
            <?php
        }
        ?>
            </div>
            <?php
        $qry_professor="SELECT * FROM faculty_profile WHERE type='PROFESSOR' AND department='".$row_dept["bname"]."'";
        $result_professor= mysqli_query($con, $qry_professor);
        ?><div class="row"><?php
        while($row_professor= mysqli_fetch_array($result_professor)){
            ?>
            <div style="border: 1px solid #ccc;float: left;width: 230px;margin:30px;margin-left: 0px;border-radius: 0px 0px 20px 20px;" class="text-center">
                <img src="admin/facultyimage/<?php echo $row_faculty["image"]; ?>" style="height: 230px;width: 230px;">
                <hr>
                <h4><?php echo $row_professor["fname"]; ?></h4>
                <h3><?php echo $row_professor["department"]; ?></h3>
                <h4><?php echo $row_professor["subject"]; ?></h4>
            </div>
            <?php
            
        }
        ?></div><?php
        $qry_faculty="SELECT * FROM faculty_profile WHERE type='FACULTY' AND department='".$row_dept["bname"]."'";
        $result_faculty= mysqli_query($con, $qry_faculty);
        ?><div class="row"><?php
        while($row_faculty= mysqli_fetch_array($result_faculty)){
            ?>
            <div style="border: 1px solid #ccc;float: left;width: 230px;margin:30px;margin-left: 0px;border-radius: 0px 0px 20px 20px;" class="text-center">
                <img src="admin/facultyimage/<?php echo $row_faculty["image"]; ?>" style="height: 230px;width: 230px;">
                <hr>
                <h4><?php echo $row_faculty["fname"]; ?></h4>
                <h3><?php echo $row_faculty["department"]; ?></h3>
                <h4><?php echo $row_faculty["subject"]; ?></h4>
            </div>
            <?php
            
        }
        ?>
        </div>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>
