<?php session_start();
 include './gecdp.php';
 if(isset($_REQUEST["btnsubmit"]))
 {
    $branch= htmlspecialchars($_REQUEST["txtbranch"],ENT_QUOTES);
    $name= htmlspecialchars($_REQUEST["txtname"],ENT_QUOTES);
    $rollno= htmlspecialchars($_REQUEST["txtrollno"],ENT_QUOTES);
    $email= htmlspecialchars($_REQUEST["txtemail"],ENT_QUOTES);
    $mobile= htmlspecialchars($_REQUEST["txtmob"],ENT_QUOTES);
    $passname= substr($name, 0, 3);
    $passdigit= substr($mobile, 5, 5);
    $pass=md5($passname."@".$passdigit);
    //echo $pass;
    
    $qry_s="INSERT INTO user_registration (branch,fname,rollno,emailid,mobileno,password)
            VALUES
            ('".$branch."','".$name."','".$rollno."','".$email."','".$mobile."','".$pass."');
            ";
    $result= mysqli_query($con, $qry_s);
    if($result)
    {
        ?>
            <script>
                alert("Data is submitted successfully");
            </script>    
        <?php
    }
    else{
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
        <title></title>
        <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="style.css" type="text/css"/>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container" style="margin-top: 50px;margin-bottom: 50px;">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label">Select department:</label>      
                    <select name="txtbranch" class="form-control">
                        <option value="">Select branch</option>
                    <?php
                        $qry_c = "SELECT * FROM branch ORDER BY bid";
                        $result_c = mysqli_query($con,$qry_c);
                        $i=1;
                        while ($row_c = mysqli_fetch_array($result_c)) {
                            echo"<option value='" . $row_c['bname'] . "'>" . $row_c['bname'] . "</option>";
                            if($i==5)
                                break;
                            $i++;
                            }
                    ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Student name:</label>
                    <input type="text" name="txtname" placeholder="Enter Student name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Roll no. of student:</label>
                    <input type="number" name="txtrollno" placeholder="Enter student rollno" class="form-control"/>
                </div>
                <div class="form-group">
                    <label class="conrol-lable">Email id of student:</label>
                    <input type="email" name="txtemail" placeholder="Enter student's email id" class="form-control"/>
                </div>
                <div class="form-group">
                    <label class="conrol-lable">Phone number of student:</label>
                    <input type="number" name="txtmob" placeholder="Enter student's mobile number" class="form-control"/>
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="btnsubmit" class="btn btn-lg btn-success"/>
                </div>
            </form>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>
