<?php  session_start();
    ini_set('error_reporting', 0);
    ini_set('display_errors', 0);
    include '.././gecdp.php';
if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"]))
{
    if(isset($_REQUEST["status"]) && $_REQUEST["status"]=='update' && isset($_REQUEST["news_id"]))
    {
        $qry="SELECT * FROM news WHERE news_id=".$_REQUEST["news_id"];
        $result= mysqli_query($con,$qry);
        $row= mysqli_fetch_array($result);           
    ?>
    <?php
    }
    if(isset($_REQUEST["btnupdate"]))
    {
        $type= htmlspecialchars($_REQUEST["txttype"],ENT_QUOTES);
        $title= htmlspecialchars($_REQUEST["txttitle"],ENT_QUOTES);
        $branch=$_POST['techno'];  
          $chk="";  
            foreach($branch as $chk1)  
               {  
                  $chk .= $chk1.",";
               } 
        $url= htmlspecialchars($_REQUEST["txturl"],ENT_QUOTES);
        $valid= htmlspecialchars($_REQUEST["txtdate"],ENT_QUOTES);
        $desc= htmlspecialchars($_REQUEST["txtdesc"],ENT_QUOTES);        
        $source_file=$_FILES["upfile"]["tmp_name"];
        $target_file = ".././news/" . $_FILES["upfile"]["name"];
        if (move_uploaded_file($source_file, $target_file)) {

            $imagename = $_FILES["upfile"]["name"];

        }
        else
        {
            $imagename = $row["related_photo"];
        }
        if($chk == ""){
            $chk=$row["dept_name"];
        }
        $qry_t="UPDATE news SET dept_name='".htmlspecialchars($chk,ENT_QUOTES)."',news_title='".$title."',news_desc='".$desc."',related_photo='".$imagename."',creater_id='".$_SESSION["admin_name"]."',is_active='active',added_on=now(),last_date='".$valid."',news_type='".$type."',url='".$url."' WHERE news_id=".$_REQUEST["news_id"].";";
        if(mysqli_query($con,$qry_t))
        {
            ?>
            <script>alert('The news has been updated successfully');
            window.location.href="../Single_news.php?news_id=<?php echo$row["news_id"]; ?>";
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
    if(isset($_REQUEST["btnpost"]))
    {
        $type= htmlspecialchars($_REQUEST["txttype"],ENT_QUOTES);
        $title= htmlspecialchars($_REQUEST["txttitle"],ENT_QUOTES);
        $branch=$_POST['techno'];  
        $chk="";  
        foreach($branch as $chk1)  
           {  
              $chk .= $chk1.",";
              //echo $chk;
           }  
        $protocol=$_REQUEST["txtprotocol"];
        $url_without=$_REQUEST["txturl"];
        $url= htmlspecialchars($protocol.$url_without,ENT_QUOTES);
        $valid= htmlspecialchars($_REQUEST["txtdate"],ENT_QUOTES);
        $desc= htmlspecialchars($_REQUEST["txtdesc"],ENT_QUOTES);        
        $source_file=$_FILES["upfile"]["tmp_name"];
        $target_file = ".././news/" . $_FILES["upfile"]["name"];
        if (move_uploaded_file($source_file, $target_file)) {
            $imagename = $_FILES["upfile"]["name"];
        }
        else{
            $imagename = "";
        }
        
        $qry_t="INSERT INTO news
            (dept_name,news_title,news_desc,related_photo,creater_id,is_active,added_on,last_date,news_type,url)
            VALUES
            ('".htmlspecialchars($chk,ENT_QUOTES)."','".$title."','".$desc."','".$imagename."','".$_SESSION["admin_name"]."','active',now(),'".$valid."','".$type."','".$url."');
            ";
        if(mysqli_query($con,$qry_t))
        {
            ?>
            <script>alert('The news has been posted successfully');
            window.location.href="../News_view.php";
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
        
        <title></title>
        
        <link rel="icon" href="images/bulb_logo.png"/>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <script src="../script.js"></script>
        
        <link href="../style.css" rel="stylesheet" type="text/css" />
        
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container border_page" style="padding: 0px 80px;">
            <h2 class="text-center" style="padding: 20px 0px 20px 0px;">Post news</h2>
            <hr>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="lable-control">Select the type of news</label>
                    <select name="txttype" class="form-control" required>
                        <option value="">Select news type</option>
                                            <?php
                                                include './gecdp.php';
                                                $qry_b = "SELECT * FROM news_type ORDER BY nid";
                                                $result_b = mysqli_query($con,$qry_b);
                                                if(isset($_REQUEST["status"]) && $_REQUEST["status"]=='update' && isset($_REQUEST["news_id"])) {
                                                    while ($row_b = mysqli_fetch_array($result_b)) {

                                                        if ($row["news_type"] == $row_b["ntype"]) {
                                                            echo"<option value='" . $row_b['ntype'] . "' selected>" . $row_b['ntype'] . "</option>";
                                                        } else {
                                                           echo"<option value='" . $row_b["ntype"] . "'>" . $row_b['ntype'] . "</option>";
                                                        }
                                                    }
                                                } else {
                                                    while ($row_b = mysqli_fetch_array($result_b)) {
                                                        echo"<option value='" . $row_b['ntype'] . "'>" . $row_b['ntype'] . "</option>";
                                                    }
                                                }                                                ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="lable-control">News Title:</label>
                    <?php
                    if(isset($_REQUEST["status"])&&$_REQUEST["status"]=='update'&&isset($_REQUEST["news_id"]))
                    {
                        echo"<input type='text' name='txttitle' class='form-control' value='".$row["news_title"]."' required />";
                    }
                    else
                    {
                    ?>
                    <input class="form-control" type="text" name="txttitle" value="" required />
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label class="lable-control">Select the branch who see the news</label><br>
                    <?php
                    if(isset($_REQUEST["status"])&&$_REQUEST["status"]=='update'&&isset($_REQUEST["news_id"]))
                    {                        
                        $qry_b="SELECT dept_name FROM news WHERE news_id=".$_REQUEST["news_id"]."";
                        //echo $qry_b;
                        $result_b=mysqli_query($con,$qry_b);
                        //echo $result_b;
                        echo "<h4 style='color:#336699;'>Selected branch:</h4>";
                        while($row_b=mysqli_fetch_array($result_b))
                        {
                            echo "<input type='checkbox' name='' value='".$row_b["dept_name"]."' checked> ".$row_b["dept_name"]."";
                
                            echo "<br>";
                        }
                    echo "<h4 style='color:#336699;'>If you want to choose new branch select here:</h4>";
                    }
                        $qry_b="SELECT * FROM branch ORDER BY bid";
                        $result_b=mysqli_query($con,$qry_b);
                        while($row_b=mysqli_fetch_array($result_b))
                        { 
                            echo "<input type='checkbox' name='techno[]' value='".$row_b["bname"]."' reqiured> ".$row_b["bname"]."";
                
                            echo "<br>";
                        }
                        ?>
                    
                </div>
                <div class="form-group">
                    <label class="lable-control">Related link (if available)</label>
                    <?php
                    if(isset($_REQUEST["status"]) && $_REQUEST["status"]=='update' && isset($_REQUEST["news_id"]))
                    {
                        echo"<input type='text' name='txturl' class='form-control' value='".$row["url"]."'/>";
                    }
                    else
                    {
                    ?>
		<div class="row">
                    <div class="col-md-2" style="">
                        <select name="txtprotocol" class="form-control">
                                <option value="http://">http://</option>
                                <option value="https://">https://</option>
                        </select>
                    </div>
                    <div class="col-md-10" style=""><input type="text" name="txturl" value="" class="form-control"/></div>
		</div>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label class="lable-control">Related photo</label>
                    <br>
                    <?php
                    if(isset($_REQUEST["status"]) && $_REQUEST["status"]=='update' && isset($_REQUEST["news_id"]))
                    {  
                        if($row["related_photo"])
                        {
                        echo"
                            <a href='../news/".$row["related_photo"]."' target='_blank' class='btn btn-default'>See existing photo</a>
                        ";
                        echo "<br><br>";
                        }
                        echo"<input type='file' name='upfile' value='".$row["related_photo"]."' class='btn btn-default' accept='images/*'/>";
                    }
                    else
                    {
                    ?>
                    <input type="file" name="upfile" accept="images/*">
                    <p style="color: #FF0000;">*file size limit is 5mb</p>
                    <?php }?>
                </div>
                <div class="form-group">
                    <label class="lable-control">Description of news:</label>
                    <?php
                    if(isset($_REQUEST["status"]) && $_REQUEST["status"]=='update' && isset($_REQUEST["news_id"]))
                    {
                        ?>
                    <textarea class="form-control" required name="txtdesc" rows="4">
                        <?php echo $row["news_desc"]?>
                    </textarea>
                        <?php
                    }
                    else
                    {
                    ?>
                    <textarea name="txtdesc" rows="4" class="form-control" required>
                        </textarea>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label class="lable-control">Valid to</label>
                    <?php
                    if(isset($_REQUEST["status"]) && $_REQUEST["status"]=='update' && isset($_REQUEST["news_id"]))
                    {
                        echo"<input type='text' name='txtdate' class='form-control' value='".$row["last_date"]."'/>";
                    }
                    else
                    {
                    ?>
                    <input type="date" name="txtdate" class="form-control"/>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group text-center container">
                    <?php
                    if (isset($_REQUEST["news_id"]) && isset($_REQUEST["status"]))
                {
                    echo"<input type='submit' value='Update' name='btnupdate' style='margin-left: -90px; margin-top: 20px;' class='btn btn-lg btn-warning'  />";
                }
                else{
                    echo"<input type='submit' value='Post' name='btnpost' style='margin-left: -90px; margin-top: 20px;' class='btn btn-warning btn-lg' />";
                }
            ?>
                </div>
            </form>
        </div>
    </body>
</html>
<div style="margin-top: 50px;"></div>
<?php
    include './footer.php';
}
else
{
    header("Location:Admin_login.php");
}
?>