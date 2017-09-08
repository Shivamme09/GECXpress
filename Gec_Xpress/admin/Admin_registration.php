<?php session_start();
    ini_set('error_reporting', 0);
    ini_set('display_errors', 0);

if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"]))
{
?>
<?php 
 include '.././gecdp.php';
 if(isset($_REQUEST["btnregister"]))
 {
     $atype= htmlspecialchars($_REQUEST["txtadmintype"],ENT_QUOTES);
     $name= htmlspecialchars($_REQUEST["txtuser"],ENT_QUOTES);
     $pass= md5(htmlspecialchars($_REQUEST["txtpass"],ENT_QUOTES));
     $email= htmlspecialchars($_REQUEST["txtemail"],ENT_QUOTES);
     
     $qry="INSERT INTO admin
         (admin_name,admin_pass,admin_email,admin_type)
         VALUES
         ('".$name."','".$pass."','".$email."','".$atype."');
             ";
     $result=mysqli_query($con,$qry);
     
     if($result)
     {
         ?>
            <script>alert('Admin is registered!!!');
            //window.location.href="Admin_registration.php";
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
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Admin Registration Page</title>
        
        <link rel="icon" href="images/bulb_logo.png"/>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script src="../script.js"></script>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container" style="margin-top: 100px;margin-bottom: 100px;">
                   
		<div class="panel panel-default">
                <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <h3 class="text-center">Admin registration</h3>
                    <hr>
                <div class="form-group">
               <label class="control-label col-sm-3" for="user">Admin type:</label>
               <div class="col-sm-6" >
                   <select name="txtadmintype" class="form-control" required>
                           <option value="">Select admin type</option>
                           <!--<option value="Principal">Principal</option>-->
                           <option value="HOD">HOD</option>
                           <option value="Administrative">Administrative</option>
<!--                           <option value="Faculty">Faculty</option>-->
                       </select>
               </div>
               </div>
               <div class="form-group">
               <label class="control-label col-sm-3" for="user">Admin id:</label>
               <div class="col-sm-6" >
               <input type="text" class="form-control" id="user" placeholder="Enter admin id" name="txtuser">
               </div>
               </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Admin email:</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" placeholder="Enter admin email id" name="txtemail"/>
                        </div>
                    </div>
               <div class="form-group">
               <label class="control-label col-sm-3" for="pass">Password:</label>
               <div class="col-sm-6">          
                <input type="password" class="form-control" id="pass" placeholder="Enter password" name="txtpass">
                </div>
                </div>
	        <div class="form-group">
	      <button class="btn btn-success center-block btn-lg" type="submit" name="btnregister">Save</button>
		</div>
                  </form>

                    </div>
               </div>
            <?php include './footer.php'; ?>
                 </body>
                 </html>
<?php
}
else
{
    header("Location:Admin_login.php");
}
?>