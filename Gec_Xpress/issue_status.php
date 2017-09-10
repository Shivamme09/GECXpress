<?php session_start();
        ini_set('error_reporting', 0);
        ini_set('display_errors', 0);

include './gecdp.php';
if(isset($_REQUEST["issue_id"])){
if((isset($_SESSION["userid"]) && isset($_SESSION["password"]))|| (isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"])))
{
    if(isset($_REQUEST["btnsubmit"]))
    {
        $status= htmlspecialchars($_REQUEST["txtstatus"],ENT_QUOTES);
        $comment= htmlspecialchars($_REQUEST["txtcomment"],ENT_QUOTES);
        $qry="UPDATE issues SET issue_status='".$status."',admin_comment='".$comment."' WHERE issue_id=".$_REQUEST["issue_id"].";";
        //echo $qry;
        $result= mysqli_query($con, $qry);
        if($result){
                        ?>
            <script>
                    alert("The status of issue is updated");
                    window.location.href="Issue_view.php";
            </script>
                        <?php
        }else{
            ?>
                <script>
                        alert("The status of issue not updated");
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
        <link rel="stylesheet" href="style.css"/>

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container" style="margin-top: 100px;margin-bottom: 100px;">
            <form method="POST" enctype="multipart/form-data">
                <div class="" style="margin-bottom: 50px;">
                    <label class="">Issue Status</label>
                    <div>
                        <?php 
                            $qry_i="SELECT * FROM issues WHERE issue_id=".$_REQUEST["issue_id"];
//                            echo $qry_i;
                            $result_i= mysqli_query($con, $qry_i);
                            $row_i= mysqli_fetch_array($result_i);if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"])){
                            if($row_i["issue_status"]=='OPEN'){
                                ?>
                                    <input type="radio" name="txtstatus" value="OPEN" checked="checked" />Open &nbsp;
                                <?php
                            }
                            else{
                                ?>
                                    <input type="radio" name="txtstatus" value="OPEN" />Open &nbsp;
                                <?php
                            }
                            if($row_i["issue_status"]=='ASSINGED'){
                                ?>
                                    <input type="radio" name="txtstatus" value="ASSINGED" checked="checked"/>Inprocess&nbsp;
                                <?php
                            }
                            else{
                                ?>
                                    <input type="radio" name="txtstatus" value="ASSINGED"/>Inprocess&nbsp;
                                <?php
                            }
                            if($row_i["issue_status"]=='CLOSED'){
                                ?>
                                    <input type="radio" name="txtstatus" value="CLOSED" checked="checked"/>Closed&nbsp;
                                <?php
                            }
                            else{
                                ?>                                    
                                    <input type="radio" name="txtstatus" value="CLOSED"/>Closed&nbsp;
                                <?php
                            }
                            if($row_i["issue_status"]=='SOLVED'){
                                ?>
                                    <input type="radio" name="txtstatus" value="SOLVED" checked="checked"/>Solved&nbsp;
                                <?php
                            }
                            else{
                                ?>                           
                                    <input type="radio" name="txtstatus" value="SOLVED"/>Solved&nbsp;
                                <?php
                            }
                        } if(isset($_SESSION["userid"]) && isset($_SESSION["password"])){
                            if($row_i["issue_status"]=='NOT SATISFIED'){
                                ?>
                                    <input type="radio" name="txtstatus" value="NOT SATISFIED" checked="cheked"/>Not Satisfied&nbsp;
                                <?php
                            }  
                            else{
                                ?>                                    
                                    <input type="radio" name="txtstatus" value="NOT SATISFIED"/>Not Satisfied&nbsp;
                                <?php
                            }
                            if($row_i["issue_status"]=='VERIFIED AND COLSED'){
                                ?>
                                    <input type="radio" name="txtstatus" value="VERIFIED AND COLSED" checked="checked" />Verified and Closed&nbsp;
                                <?php
                            }
                            else{
                                ?>                                    
                                    <input type="radio" name="txtstatus" value="VERIFIED AND COLSED" />Verified and Closed&nbsp;
                                <?php
                            }
                        }
                            ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Comment</label>
                    <div>
                        <textarea name="txtcomment" rows="4" cols="20" class="form-control" required minlength="10" maxlength="1000">
                        </textarea>
                    </div>
                </div>
                <div class="form-group text-center">
                    <input type="submit" value="Submit" name="btnsubmit" class="btn btn-info" />
                </div>
            </form>
        </div>
    </body>
</html>
<?php include './footer.php'; ?>
<?php
}
else{
    ?><script>
        alert("You have to be logged in to access this page!!");
        window:location.href="Gec_Xpress.php";
    </script><?php
}}else{
    header("location:Single_issue.php");
}
?>
