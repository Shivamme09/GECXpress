<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include './gecdp.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="icon" href="./images/bulb_logo.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./style.css" type="text/css"/>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container">
        <?php            
            if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
            {
            $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."' AND password='".$_SESSION["password"]."';";
            //echo $qry;
            $result=mysqli_query($con,$qry);
            $row=mysqli_fetch_array($result);
            
            }
        ?>
            <div style="margin-top: 50px;"></div>
        <form action="submit_profile.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                                    <label class="conrol-lable">Roll No.:</label>
                                    <input type="number" class="form-control border_v" style="border-radius: 30px;" name="txtroll" value="<?php echo $row["rollno"]?>" required minlength="10" maxlength="10"/>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="conrol-lable">Enrollment No.:</label>
                                        <input type="text" class="form-control border_v" style="border-radius: 30px;" name="txtenroll" value="<?php echo $row["enrollment"]?>" required minlength="6" maxlength="6"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="conrol-lable">Semester:</label>
                                        <select name="txtsem" class="form-control border_v" style="border-radius: 30px;"  required>
                                            <option value="">Select semester</option>
                                            <?php
                                                include './gecdp.php';
                                                $qry_b = "SELECT * FROM semester ORDER BY id";
                                                $result_b = mysqli_query($con,$qry_b);
                                                if(isset($_SESSION["userid"]) && isset($_SESSION["password"])) {
                                                    while ($row_b = mysqli_fetch_array($result_b)) {

                                                        if ($row["semester"] == $row_b["semester"]) {
                                                            echo"<option value='" . $row_b['semester'] . "' selected>" . $row_b['semester'] . "</option>";
                                                        } else {
                                                            echo"<option value='" . $row_b["semester"] . "'>" . $row_b['semester'] . "</option>";
                                                        }
                                                    }
                                                } else {
                                                    while ($row_b = mysqli_fetch_array($result_b)) {
                                                        echo"<option value='" . $row_b['semster'] . "'>" . $row_b['semester'] . "</option>";
                                                    }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label class="conrol-lable">Branch:</label>
                                        <select name="txtbranch" class="form-control border_v" style="border-radius: 30px;"  required>
                                            <option value="">Select your Branch</option>
                                            <?php
                                                include './gecdp.php';
                                                $qry_c = "SELECT * FROM branch ORDER BY bid";
                                                $result_c = mysqli_query($con,$qry_c);
                                                if(isset($_SESSION["userid"]) && isset($_SESSION["password"])) {
                                                    while ($row_c = mysqli_fetch_array($result_c)) {

                                                        if ($row["branch"] == $row_c["bname"]) {
                                                            echo"<option value='" . $row_c['bname'] . "' selected>" . $row_c['bname'] . "</option>";
                                                        } else {
                                                            echo"<option value='" . $row_c["bname"] . "'>" . $row_c['bname'] . "</option>";
                                                        }
                                                    }
                                                } else {
                                                    while ($row_c = mysqli_fetch_array($result_b)) {
                                                        echo"<option value='" . $row_c['bname'] . "'>" . $row_c['bname'] . "</option>";
                                                    }
                                                }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Achivement(Training & Certificates):</label>
                                    <textarea name="txtachive" rows="5" class="form-control border_v" style="border-radius: 30px;"  required minlength="10" maxlength="1000">
                                        <?php echo $row["achive"]; ?>
                                    </textarea>
                                </div>
                                <div class="text-center">
                <input type="submit" name="btn2" class="btn btn-primary btn-lg" style="width: 200px;background-color: #ED1B51;border-color: #ED1B51;border-radius: 50px;"/>
                                </div>
        </form>
            </div>
        <div style="margin-top: 50px;"></div>
        <?php include './footer.php'; ?>
    </body>
</html>
