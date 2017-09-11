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
        <?php        include './header.php';
            if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
            {
            $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."';";
            $result=mysqli_query($con,$qry);
            $row=mysqli_fetch_array($result);            
            }
        ?>
        <form action="submit_profile.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                                    <label class="conrol-lable" class="form-control"></label>
                                    <div class="text-center">
                                        <img src="./studentphoto/<?php echo $row["photo"]; ?>" class="img-responsive img-thumbnail" style="height: 450px;width: 350px;" />
                                    </div>
                                    <div class="col-md-5"></div>
                                    <div class="col-md-3" style="margin-top: 20px;">
                                        <?php if($row["photo"])
                                        {
                                            echo "<input type='file' name='upfile'/>";
                                        }
                                        else {
                                        ?>
                                        <input type="file" name="upfile" style=""  required accept=""/>
                                        <?php }?>                                        
                                        <p style="color: #FF0000;">*file size limit is 5mb</p>
                                    </div>
                                </div>
            <div class="text-center">
                <input type="submit" name="btn3" class="btn btn-primary btn-lg border_v" style="width: 200px;background-color: #ED1B51;border-color: #ED1B51;border-radius: 50px;"/>
            </div>
        </form>
        <div style="margin-top: 50px;"></div>
        <?php include './footer.php'; ?>
    </body>
</html>
