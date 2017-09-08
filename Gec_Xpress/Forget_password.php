<?php   session_start();
        ini_set('error_reporting', 0);
        ini_set('display_errors', 0);
        include './gecdp.php';
 include './header.php';
if(isset($_REQUEST["btnsubmit2"]))
{
    $pass= htmlspecialchars($_REQUEST["txtpass"],ENT_QUOTES);
    $confpass= htmlspecialchars($_REQUEST["txtconf"],ENT_QUOTES);
    if($pass == $confpass)
    {
        $qry_n="UPDATE user_registration SET password='".md5($pass)."' WHERE rollno='".$_SESSION["rollno"]."'";
        $_SESSION["rollno"]="";
        session_destroy();
        $result_n= mysqli_query($con, $qry_n);
        if($result_n)
        {
            ?>
                <script>
                    alert("Your password is reset succussfully please Login!!");
                    window.location.href="Gec_Xpress.php";
                </script>    
            <?php
        }
        else
        {
            ?>
            <script type='text/javascript'>
                var str="<?php echo mysqli_error($con); ?>";  
                var res=str.replace(/'/g,"");

                alert(res);
            </script>
            <?php
        }
               
    }
    else
    {
        ?>
<script>
    alert("Your password and confirm password is not matching. Please try again!!");
    window.location.href="Forget_password.php";
</script>    
        <?php
    }
}
else if(isset($_REQUEST["btnsubmit"]))
{
    //echo "vikashh";
    $fname= htmlspecialchars($_REQUEST["txtfname"],ENT_QUOTES);
    $rollno= htmlspecialchars($_REQUEST["txtrollno"],ENT_QUOTES);
    $email= htmlspecialchars($_REQUEST["txtemail"],ENT_QUOTES);
    
    $qry="SELECT * FROM user_registration WHERE fname='".$fname."'&&rollno='".$rollno."'&&emailid='".$email."'&&trash!='yes'";
    $result= mysqli_query($con, $qry);
    $row= mysqli_fetch_array($result);
    if(mysqli_affected_rows($con)>0)
    {
        $_SESSION["rollno"]=$rollno;
        ?>
<html>
    <head>
        <title></title>
        <link rel="icon" href="images/bulb_logo.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <div class="container" style="padding-bottom: 150px;padding-top: 150px;">
            <form method="Post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="conrol-lable">Enter new Password:</label>
                    <input type="password" name="txtpass" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label class="control-lable">Confirm your password</label>
                    <input type="password" name="txtconf" class="form-control" required/>
                </div>
                <div class="text-center">
                    <input type="submit" name="btnsubmit2" class="btn btn-warning" value="Reset password"/>
                </div>
            </form>
        </div>
    </body>
</html>    
        <?php
    }
    else
    {
        ?>
<script>
    alert("Sorry!! Your given information is not in database. Contact your admin");
    window.location.href="Forget_password.php";
</script>    
        <?php
    }
}
else
{
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <?php // include './header.php'; ?>
        <div class="container" style="padding-top: 100px;padding-bottom: 100px;">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Enter your first name:</label>
                    <input type="text" name="txtfname" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label>Enter your Roll no:</label>
                    <input type="text" name="txtrollno" class="form-control" required minlength="10" maxlength="10"/>
                </div>
                <div class="form-group">
                    <label>Enter your E-mail id:</label>
                    <input type="email" name="txtemail" class="form-control" required/>
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="btnsubmit" value="Submit" class="btn btn-warning"/>
                </div>
            </form>
        </div>
        <?php // include './footer.php'; ?>
    </body>
</html>
<?php
}
include './footer.php';
?>
