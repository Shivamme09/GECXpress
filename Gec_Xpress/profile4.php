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
            <div style="margin-top: 70px;"></div>
        <?php
            if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
            {
            $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."' AND password='".$_SESSION["password"]."';";
            //echo $qry;
            $result=mysqli_query($con,$qry);
            $row=mysqli_fetch_array($result);            
            }
        ?>
        <form action="submit_profile.php" method="POST" enctype="multipart/form-data">
            <h2 style="color: #ad838f;margin-top: 0px;margin-bottom: 50px;">Your Password is already set if you want to change please fill the above section!!</h2>
                <div class="row">
                    <div class="col-md-3"></div>
                        <div class="form-group col-md-6">
                            <label class="conrol-lable">Choose password:</label>
                            <input type="password" class="form-control border_v" style="border-radius: 30px;" name="txtpass" minlength="8" maxlength="30"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"></div>
                            <div class="form-group col-md-6">
                                <label class="conrol-lable">Confirm your password:</label>
                                <input type="password" class="form-control border_v" style="border-radius: 30px;" name="txtconf" minlength="8" maxlength="30"/>
                            </div>
                    </div>
            <div class="text-center">
                <input type="submit" name="btn4" class="btn btn-primary btn-lg border_v" style="width: 200px;background-color: #ED1B51;border-color: #ED1B51;border-radius: 50px;"/>
            </div>
        </form>
            <div style="margin-top: 80px;"></div>
        </div>
            <?php include './footer.php'; ?>
    </body>
</html>
