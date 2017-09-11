<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include './gecdp.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
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
            $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."' AND password='".$_SESSION["password"]."';";
            //echo $qry;
            $result=mysqli_query($con,$qry);
            $row=mysqli_fetch_array($result);
            
            }
        ?>
        <div class="container">
        <form action="submit_profile.php" method="POST" enctype="multipart/form-data">
            <div style="margin-top: 50px;"></div>
            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="control-lable">First Name:</label>
                                    <input type="text" class="form-control border_v" style="border-radius: 30px;" required name="txtfname" value="<?php echo $row["fname"]?>" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="conrol-lable">Last Name:</label>
                                    <input type="text" class="form-control border_v" style="border-radius: 30px;" name="txtlname"  value="<?php echo $row["lname"]?>" required />
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="control-lable">Father Name:</label>
                                    <input type="text" class="form-control border_v" style="border-radius: 30px;" name="txtfather" value="<?php echo $row["fathername"]?>" required />
                                </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="conrol-lable">Date of birth:</label>
                                    <input type="date" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" class="form-control border_v" style="border-radius: 30px;" name="txtdate" value="<?php echo $row["dob"]?>" required />
                                </div>
                            </div>
                            <div>
                                <label class="conrol-lable">Gender:<br>
                                    <?php
                                        $value=$row["gender"];
                                        if($value='Male')
                                        {
                                            
                                            echo"<input type='radio' name='txtgender' value='Male' checked='checked'/>       Male";
                                            ?>
                                    <span style="margin-left: 20px;"></span>    
                                            <?php
                                            echo"<input type='radio' name='txtgender' value='Female' />       Female";
                                        }
                                        else
                                        {
                                            echo"<input type='radio' name=txtgender' value='Male'/>Male";
                                            echo"<input type='radio' name=txtgender' value='Female'  checked='checked' />Female";;
                                        }
                                    ?>
                                        </label>
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Email Id:</label>
                                    <input type="email" class="form-control border_v" style="border-radius: 30px;" name="txtemail" value="<?php echo $row["emailid"]?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Mobile No.:</label>
                                    <input type="number" class="form-control border_v" style="border-radius: 30px;" name="txtmobile" value="<?php echo $row["mobileno"]?>" required />
                                </div>
                                <div class="form-group">
                                    <label class="conrol-lable">Address:</label>
                                    <textarea name="txtaddress" class="form-control border_v" style="border-radius: 30px;" rows="4" required minlength="10" maxlength="500">
                                        <?php echo $row["address"]; ?>
                                    </textarea>   
                                </div>
            <div class="text-center">
                <input type="submit" name="btn1" class="btn btn-primary btn-lg" style="width: 200px;background-color: #ED1B51;border-color: #ED1B51;border-radius: 50px;"/>
                                </div>
        
        </form></div>
        <div style="margin-top: 50px;"></div>
            <?php include './footer.php'; ?>
    </body>
</html>
