<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
if(isset($_SESSION["userid"]) && $_SESSION["password"])
{
include './header.php';
include 'gecdp.php';
if(isset($_REQUEST["btnsubmit"]))
{
    //echo $fname;
	$fname= htmlspecialchars($_REQUEST["txtfname"],ENT_QUOTES);
	$lname= htmlspecialchars($_REQUEST["txtlname"],ENT_QUOTES);
	$father=htmlspecialchars($_REQUEST["txtfather"],ENT_QUOTES);
	$dob=htmlspecialchars($_REQUEST["txtdate"],ENT_QUOTES);
	$gender=htmlspecialchars($_REQUEST["txtgender"],ENT_QUOTES);
	$email=htmlspecialchars($_REQUEST["txtemail"],ENT_QUOTES);
	$mobile=htmlspecialchars($_REQUEST["txtmobile"],ENT_QUOTES);
	$address=htmlspecialchars($_REQUEST["txtaddress"],ENT_QUOTES);
	$rollno=htmlspecialchars($_REQUEST["txtroll"],ENT_QUOTES);
	$enroll=htmlspecialchars($_REQUEST["txtenroll"],ENT_QUOTES);
	$sem=htmlspecialchars($_REQUEST["txtsem"],ENT_QUOTES);
	$branch=htmlspecialchars($_REQUEST["txtbranch"],ENT_QUOTES);
	$achive=htmlspecialchars($_REQUEST["txtachive"],ENT_QUOTES);
	
	$source_file=$_FILES["upfile"]["tmp_name"];
        $target_file = "studentphoto/" . $_FILES["upfile"]["name"];
        if (move_uploaded_file($source_file, $target_file)) {

            $imagename = htmlspecialchars($_FILES["upfile"]["name"],ENT_QUOTES);

        }
	
	$pass=htmlspecialchars($_REQUEST["txtpass"],ENT_QUOTES);
	$confpass=htmlspecialchars($_REQUEST["txtconf"],ENT_QUOTES);
        if($pass==$confpass)
        {
        //echo $pass;
    ?>
<html>
    <head>
        <title>Profile Page</title>
                <link rel="icon" href="images/bulb_logo.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css"/>
    </head>
    <body>
        <div class="container" style="">
        <form action="Profile_page.php" method="POST" enctype="multipart/form-data">
            <div id="id15" class="tab-pane fade in" style="font-size: 17px;">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-5">
                        <div class="font_padding_v">
                                 Name: <?php echo $fname;    echo " "; echo $lname; ?>
                                 <input type="hidden" name="fname2" value="<?php echo $fname; ?>"/>                        
                         </div>
                         <div class="">
                                 <input type="hidden" name="lname2" value="<?php echo $lname; ?>"/>
                         </div>
                         <div class="font_padding_v">
                                 Father's Name: <?php echo $father?>
                                 <input type="hidden" name="father2" value="<?php echo $father; ?>"/>
                         </div>
                         <div class="font_padding_v">
                                 Date of Birth: <?php echo $dob?>
                                 <input type="hidden" name="dob2" value="<?php echo $dob; ?>"/>
                         </div>
                         <div class="font_padding_v">
                                 Gender: <?php echo $gender?>
                                 <input type="hidden" name="gender2" value="<?php echo $gender; ?>"/>
                         </div>
                         </div>
                             <div class="col-md-3"></div>
                             <div class="col-md-3 font_padding_v" style="">
                                 <?php
                                 if($imagename=="")
                                 {
                                $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."' AND password='".$_SESSION["password"]."';";
                                //echo $qry;
                                $result=mysqli_query($con,$qry);
                                $row=mysqli_fetch_array($result);
                                //echo $row["photo"];
                                echo "<img src='studentphoto/" . $row["photo"]. "' class='img-thumbnail' width=146 height=196 style='padding:2px;'>"; ?>
                                 <input type="hidden" name="imagename2" value="<?php echo $row["photo"]; ?>" />
                                 <?php }else{
                                 echo "<img src='studentphoto/" . $imagename . "' class='img-thumbnail' width=146 height=196 style='padding:2px;'>"; ?>
                                 <input type="hidden" name="imagename2" value="<?php echo $imagename; ?>"/>
                                 <?php } ?>
                         </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-11">
                        <div  class="font_padding_v">
                                Email: <?php echo $email?>
                                <input type="hidden" name="email2" value="<?php echo $email; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Mobile No.: <?php echo $mobile?>
                                <input type="hidden" name="mobile2" value="<?php echo $mobile; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Address: <?php echo $address?>
                                <input type="hidden" name="address2" value="<?php echo $address; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Roll Number: <?php echo $rollno?>
                                <input type="hidden" name="rollno2" value="<?php echo $rollno; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Enroll No.: <?php echo $enroll?>
                                <input type="hidden" name="enroll2" value="<?php echo $enroll; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Semester: <?php echo $sem?>
                                <input type="hidden" name="sem2" value="<?php echo $sem; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Branch: <?php echo $branch?>
                                <input type="hidden" name="branch2" value="<?php echo $branch; ?>"/>
                        </div>
                        <div  class="font_padding_v">
                                Achivements: <?php echo $achive?>  
                                <input type="hidden" name="achive2" value="<?php echo $achive; ?>"/>
                        </div>
                        <?php                        
                            if($pass=="" && $confpass=="")
                                {
                                    $qry_a="SELECT password FORM user_registration WHERE rollno='".$_SESSION["userid"]."' AND password='".$_SESSION["password"]."'";
                                    $result_a= mysqli_query($con, $qry_a);
                                    $row_a= mysqli_fetch_array($result_a);
                                    ?>
                                    <input type="hidden" name="pass2" value="<?php echo $row["password"]; ?>"/>
                                        <?php
                                }
                            else {
                             ?>
                                 <input type="hidden" name="pass2" value="<?php echo $pass; ?>"/>     
                                 <?php
                             
                            }
                        ?>
                              
                    </div>
                    <div  class="button_align_v">
                        <input type="submit" class="button_v" style="border:0px;color: #fff;padding: 10px;" name="btnfinal" />
                    </div> 
                </div>
            </div>
        </form>
        </div>
        <div style="margin-top: 30px;">
        <?php
         include './footer.php';
        ?>
        </div>
	</body>
</html>

<?php
        }
 else {
     ?>
<script>
    alert("Your password and confirm password is not matching please try again!!!");
    window.location.href="Student_profile.php";
</script>
         <?php
 }
}
else if(isset($_REQUEST["btnfinal"]))
{
    $fname2= htmlspecialchars($_REQUEST["fname2"],ENT_QUOTES);
    $lname2= htmlspecialchars($_REQUEST["lname2"],ENT_QUOTES);
    $imagename2= htmlspecialchars($_REQUEST["imagename2"],ENT_QUOTES);
    $father2= htmlspecialchars($_REQUEST["father2"],ENT_QUOTES);
    $dob2= htmlspecialchars($_REQUEST["dob2"],ENT_QUOTES);
    $gender2= htmlspecialchars($_REQUEST["gender2"],ENT_QUOTES);
    $email2= htmlspecialchars($_REQUEST["email2"],ENT_QUOTES);
    $mobile2= htmlspecialchars($_REQUEST["mobile2"],ENT_QUOTES);
    $address2= htmlspecialchars($_REQUEST["address2"],ENT_QUOTES);
    $rollno2= htmlspecialchars($_REQUEST["rollno2"],ENT_QUOTES);
    $enroll2= htmlspecialchars($_REQUEST["enroll2"],ENT_QUOTES);
    $sem2= htmlspecialchars($_REQUEST["sem2"],ENT_QUOTES);
    $branch2= htmlspecialchars($_REQUEST["branch2"],ENT_QUOTES);
    $achive2= htmlspecialchars($_REQUEST["achive2"],ENT_QUOTES);
    $pass2= md5(htmlspecialchars($_REQUEST["pass2"],ENT_QUOTES));
    //echo $pass2;
//    $qry="INSERT INTO user_registration
//                    (fname,lname,fathername,dob,gender,emailid,mobileno,address,rollno,enrollment,semester,branch,achive,photo,password)
//                    VALUES
//                    ('".$fname2."','".$lname2."','".$father2."','".$dob2."','".$gender2."','".$email2."','".$mobile2."','".$address2."','".$rollno2."','".$enroll2."','".$sem2."','".$branch2."','".$achive2."','".$imagename2."','".$pass2."');
//            ";
    
    $qry="UPDATE user_registration SET
            fname='".$fname2."',lname='".$lname2."',fathername='".$father2."',dob='".$dob2."',gender='".$gender2."',emailid='".$email2."',mobileno='".$mobile2."',address='".$address2."',rollno='".$rollno2."',enrollment='".$enroll2."',semester='".$sem2."',branch='".$branch2."',achive='".$achive2."',photo='".$imagename2."',password='".$pass2."'
            WHERE rollno='".$rollno2."';
            ";
    
    
        //echo $qry;
//        echo $con;
        if (mysqli_query($con,$qry)) {
            ?>
            <script>alert('Your given information is updated sucessfully plz login!!!!');
            window.location.href="Logout.php";
            </script>
            <?php
        } 
        else {
               ?>

            <script type='text/javascript'>
    var str="<?php echo mysqli_error($con); ?>";  
    var res=str.replace(/'/g,"");
    
    alert(res);
            </script>
            <?php
        }
    
    ?>
        <?php
}
 else {    
?>
<!DocType html>
<html>
    <head>
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link href="style.css" rel="stylesheet" type="text/css" />
        
        <style>
            .yo
            {
                border-radius: 30px;
            }
              input:focus:invalid
          {
              border-color: #a94442;
              box-shadow:0 0px 6px #ce8483;
          }
          input:required:valid
          {
              border-color: #3c763d;
              box-shadow: 0px 0px 6px #67b168
          }
                textArea:focus:empty
                {
                    border-color: #a94442;
                    box-shadow:0 0px 8px #ce8483;
                }
                textArea:required:valid
                {
                    border-color: #3c763d;
                    box-shadow: 0px 0px 8px #67b168
                }
                
          select:focus:invalid
          {
              border-color: #a94442;
              box-shadow:0 0px 8px #ce8483;
          }
          select:required:valid
          {
              border-color: #3c763d;
              box-shadow: 0px 0px 8px #67b168
          }
        </style>
        
        
    </head>
    <body>
        <?php
        ?>
<!--		<ul class="nav nav-pills nav-justified">
			<li class="active"><a href="#id11" data-toggle="tab">Home</a></li>
			<li><a href="#id12" data-toggle="tab">About us</a></li>
			<li><a href="#id13" data-toggle="tab">Gallery</a></li>
			<li><a href="#id14" data-toggle="tab">Login</a></li>
                        <li><a href="$id15" data-toggle="tab">vikash</a>
		</ul>-->
<!--        retriving data of user-->
        <?php
            if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
            {
            $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."' AND password='".$_SESSION["password"]."';";
            //echo $qry;
            $result=mysqli_query($con,$qry);
            $row=mysqli_fetch_array($result);
            
            }
        ?>
<!--retriving data of user end-->
<div class="container">       
        <form action="Profile_page.php" method="POST" enctype="multipart/form-data">
		<div class="tab-content">
			<div id="id11" class="tab-pane fade in active">
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
<!--                                    <input type="radio" name="txtgender" value="Male" checked="checked" />Male
                                    <input type="radio" name="txtgender" value="Female"/>Female-->
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
                            <div class="button_align_v">    
                                <a href="#id12" data-toggle="tab" class="btn btn-primary button_v" style="border-radius: 30px;background-color: #ED1B51;border-color: #ED1B51;margin-top: 30px;">Save & Next</a>
                            </div>
                                
                        </div>
			<div id="id12" class="tab-pane fade in">
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
<!--                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>-->
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
<!--                                            <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                                            <option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
                                            <option value="Electronics & Telecommunication Engineering">Electronics & Telecommunication Engineering</option>
                                            <option value="Civil Engineering">Civil Engineering</option>
                                            <option value="Mechanical Engineering">Mechanical Engineering</option>-->
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
                                <div class="button_align_v">
                                    <a href="#id13" data-toggle="tab" class="btn btn-primary button_v" style="border-radius: 30px;background-color: #ED1B51;border-color: #ED1B51;margin-top: 30px;" >Save & Next</a>
                                </div>
			</div>
			<div id="id13" class="tab-pane fade in">
                                <div class="form-group row">
                                    <label class="conrol-lable" class="form-control"></label>
                                    <div class="text-center">
                                        <img src="studentphoto/<?php echo $row["photo"]; ?>" class="img-responsive img-thumbnail" style="height: 450px;width: 350px;" />
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
                                <div class="button_align_v">
                                    <a href="#id14" data-toggle="tab" class="btn btn-primary button_v"  style="border-radius: 30px;background-color: #ED1B51;border-color: #ED1B51;">Save & Next</a>
                                </div>
			</div>
                    <div id="id14" class="tab-pane fade in" style="padding-top: 100px;padding-bottom: 200px;">
                                <div class="">
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
                                </div>
                                <div class="button_align_v">
                                    <input type="submit" name="btnsubmit" class="btn btn-primary button_v" style="border-radius: 30px;background-color: #ED1B51;border-color: #ED1B51;margin-top: 30px;" value="Save & Next"/>
                                </div>
			</div>
		</div>
        </form>
</div>
<div style="padding-top: 50px;">
    <?php
        include './footer.php';
    ?>
</div>
    </body>
</html>
<?php
 }
}
else
{
    ?>
<script>
    alert("You have to be logged in to open this page");
    window.location.href="Gec_Xpress.php";
</script>
        <?php
}
 
?>