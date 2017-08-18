<?php session_start();
include './gecdp.php';
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
        <link rel="icon" href="images/bulb_logo.png"/>

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
                        <?php if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"])){  ?>
                        <input type="radio" name="txtstatus" value="Open" checked="checked" />Open &nbsp;
                        <input type="radio" name="txtstatus" value="Inprocess"/>Inprocess&nbsp;
                        <input type="radio" name="txtstatus" value="Closed"/>Closed&nbsp;
                        <input type="radio" name="txtstatus" value="Respond"/>Respond&nbsp;
                        <?php }if(isset($_SESSION["userid"]) && isset($_SESSION["password"])){ ?>
                        <input type="radio" name="txtstatus" value="Resolve" checked="checked"/>Resolve&nbsp;
                        <input type="radio" name="txtstatus" value="Solved" />Solved&nbsp;
                        <?php } ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label">Comment</label>
                    <div>
                        <textarea name="txtcomment" rows="4" cols="20" class="form-control">
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
}
?>
