<?php session_start();
 include '../gecdp.php';
if(isset($_REQUEST["btn1"])){    
        $_SESSION["fname_profile"]= htmlspecialchars($_REQUEST["txtfname"],ENT_QUOTES);
	$_SESSION["lname_profile"]= htmlspecialchars($_REQUEST["txtlname"],ENT_QUOTES);
	$_SESSION["father_profile"]=htmlspecialchars($_REQUEST["txtfather"],ENT_QUOTES);
	$_SESSION["date_profile"]=htmlspecialchars($_REQUEST["txtdate"],ENT_QUOTES);
	$_SESSION["gender_profile"]=htmlspecialchars($_REQUEST["txtgender"],ENT_QUOTES);
	$_SESSION["email_profile"]=htmlspecialchars($_REQUEST["txtemail"],ENT_QUOTES);
	$_SESSION["mobile_profile"]=htmlspecialchars($_REQUEST["txtmobile"],ENT_QUOTES);
	$_SESSION["address_profile"]=htmlspecialchars($_REQUEST["txtaddress"],ENT_QUOTES);
        header("location:profile2.php");
}
if(isset($_REQUEST["btn2"])){
    
	$_SESSION["roll_profile"]=htmlspecialchars($_REQUEST["txtroll"],ENT_QUOTES);
	$_SESSION["enroll_profile"]=htmlspecialchars($_REQUEST["txtenroll"],ENT_QUOTES);
	$_SESSION["sem_profile"]=htmlspecialchars($_REQUEST["txtsem"],ENT_QUOTES);
	$_SESSION["branch_profile"]=htmlspecialchars($_REQUEST["txtbranch"],ENT_QUOTES);
	$_SESSION["achive_profile"]=htmlspecialchars($_REQUEST["txtachive"],ENT_QUOTES);
        header("location:profile3.php");
}
if(isset($_REQUEST["btn3"])){ 
	
	$source_file=$_FILES["upfile"]["tmp_name"];
        $target_file = "../studentphoto/" . $_FILES["upfile"]["name"];
        if (move_uploaded_file($source_file, $target_file)) {

            $_SESSION["imagename_profile"] = htmlspecialchars($_FILES["upfile"]["name"],ENT_QUOTES);

        }else{
            $_SESSION["imagename_profile"]="";
        }
        header("location:profile4.php");
}
if(isset($_REQUEST["btn4"])){
    $pass=htmlspecialchars($_REQUEST["txtpass"],ENT_QUOTES);
	$confpass=htmlspecialchars($_REQUEST["txtconf"],ENT_QUOTES);
        if($pass==$confpass)
        {
            $_SESSION["pass_profile"]=$pass;
            header("location:confirm_profile.php");
        }else {
        ?>
        <script>
            alert("Your password and confirm password is not matching please try again!!!");
            window.location.href="profile4.php";
        </script>
         <?php
 }
}
if(isset($_REQUEST["btnconfirm"])){
        if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
            {
            $qry="SELECT * FROM user_registration WHERE rollno='".$_SESSION["userid"]."';";
            $result=mysqli_query($con,$qry);
            $row=mysqli_fetch_array($result);            
            }
        if(($_SESSION["imagename_profile"])==""){
            $_SESSION["imagename_profile"]=$row["photo"];
        }
        if(($_SESSION["pass_profile"])==""){            
        $qry="UPDATE user_registration SET
            fname='".$_SESSION["fname_profile"]."',lname='".$_SESSION["lname_profile"]."',fathername='".$_SESSION["father_profile"]."',dob='".$_SESSION["date_profile"]."',gender='".$_SESSION["gender_profile"]."',emailid='".$_SESSION["email_profile"]."',mobileno='".$_SESSION["mobile_profile"]."',address='".$_SESSION["address_profile"]."',rollno='".$_SESSION["roll_profile"]."',enrollment='".$_SESSION["enroll_profile"]."',semester='".$_SESSION["sem_profile"]."',branch='".$_SESSION["branch_profile"]."',achive='".$_SESSION["achive_profile"]."',photo='".$_SESSION["imagename_profile"]."'
            WHERE rollno='".$_SESSION["roll_profile"]."';
            ";
        }else{
        $qry="UPDATE user_registration SET
            fname='".$_SESSION["fname_profile"]."',lname='".$_SESSION["lname_profile"]."',fathername='".$_SESSION["father_profile"]."',dob='".$_SESSION["date_profile"]."',gender='".$_SESSION["gender_profile"]."',emailid='".$_SESSION["email_profile"]."',mobileno='".$_SESSION["mobile_profile"]."',address='".$_SESSION["address_profile"]."',rollno='".$_SESSION["roll_profile"]."',enrollment='".$_SESSION["enroll_profile"]."',semester='".$_SESSION["sem_profile"]."',branch='".$_SESSION["branch_profile"]."',achive='".$_SESSION["achive_profile"]."',photo='".$_SESSION["imagename_profile"]."',password='".md5($_SESSION["pass_profile"])."'
            WHERE rollno='".$_SESSION["roll_profile"]."';
            ";
        }
            if (mysqli_query($con,$qry)) {
            ?>
            <script>alert('Your given information is updated sucessfully plz login again!!!!');
            window.location.href="submit_profile.php?status=destroy";
            </script>
            <?php
        } 
        else {
               ?>

            <script type='text/javascript'>
                var str="<?php echo mysqli_error($con); ?>";  
                var res=str.replace(/'/g,"");

                alert(res);
                window.location.href="confirm_profile.php";
            </script>
            <?php
        }
}
if(isset($_REQUEST["status"]) && isset($_REQUEST["status"])=='destroy'){
    $_SESSION["fname_profile"]= "";
	$_SESSION["lname_profile"]= "";
	$_SESSION["father_profile"]="";
	$_SESSION["date_profile"]="";
	$_SESSION["gender_profile"]="";
	$_SESSION["email_profile"]="";
	$_SESSION["mobile_profile"]="";
	$_SESSION["address_profile"]="";
        $_SESSION["roll_profile"]="";
	$_SESSION["enroll_profile"]="";
	$_SESSION["sem_profile"]="";
	$_SESSION["branch_profile"]="";
	$_SESSION["achive_profile"]="";
        $_SESSION["imagename_profile"] ="";
        $_SESSION["pass_profile"]="";
        session_destroy();
        header("location:../Logout.php");
}

