<?php session_start();
        ini_set('error_reporting', 0);
        ini_set('display_errors', 0);
        include './gecdp.php';
        
if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"]))
{
    if(isset($_REQUEST["issue_id"]))
    {
        $qry="SELECT * FROM issues WHERE issue_id='".$_REQUEST["issue_id"]."'";
        $result= mysqli_query($con, $qry);
        $row= mysqli_fetch_array($result);
    }
}
else if(isset($_SESSION["userid"]) && isset($_SESSION["password"]))
{
    if(isset($_REQUEST["issue_id"]))
    {
        $qry="SELECT * FROM issues WHERE issue_id='".$_REQUEST["issue_id"]."' AND student_id='".$_SESSION["userid"]."'";
        $result= mysqli_query($con, $qry);
        $row= mysqli_fetch_array($result);
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Issue</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        
        <link rel="icon" href="images/bulb_logo.png"/>
        
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="style.css" type="text/css">
        
        <script src="script.js"></script>
          
          <script type="text/javascript">
             function confirmDelete(link)
             {
                 if(confirm('Are you sure you want to delete the news??'))
                 {
                     doAjax(link.href,"POST");
                 }
                 return false;
             }
            </script>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container" style="margin-top: 70px;">
               
            <div class="progress">
            <?php switch ($row["issue_status"]) {
                    case 'OPEN':
                        echo"<div class='progress-bar progress-bar-striped active' style='width:15%'>Issue is Open</div>";
                        break;
                    case 'ASSINGED':
                        echo "<div class='progress-bar progress-bar-info progress-bar-striped active' style='width:32%'>Issue is Assinged</div>";
                        break;
                    case 'CLOSED':
                        echo "<div class='progress-bar progress-bar-danger progress-bar-striped' style='width:49%'>Issue is Closed</div>";
                        break;
                    case 'SOLVED':
                        echo "<div class='progress-bar progress-bar-success progress-bar-striped active' style='width:66%'>Issue is Solved please check and reply</div>";
                        break;
                    case 'NOT SATISFIED':
                        echo "<div class='progress-bar progress-bar-warning progress-bar-striped active' style='width:83%'>Issue has to Resolve</div>";
                        break;
                    case 'VERIFIED AND COLSED':
                        echo "<div class='progress-bar progress-bar-success progress-bar-striped' style='width:100%'>Issue is now Solved</div>";
                        break;
                    default:
                        break;
                } ?>
            </div>
        </div>
        <div class="container" style="border: 1px solid #ccc;margin-bottom: 50px;margin-top: 50px;">
            <?php ?>        
        <div class="wrapper row3 center"  style="margin-top: 80px;">            
        <main class="hoc container clear"> 
          <!-- main body -->
          <div class="group center" style="">
              <div>
                  <?php if($row["issue_status"] == 'VERIFIED AND COLSED' && $_SESSION["admin_name"]){ ?>
              <a href="Issue_view.php?status=delete && issue_id=<?php echo $row["issue_id"]; ?>" onClick='return confirmDelete(this);' style="color:#000;text-decoration: none;" title="Delete the news" >
              
            <article class="one_half first"><i class="icon fa fa-trash-o"></i>
              
            </article>
              </a>
                  <?php }else{ ?>
                  <a href="#" style="color:#000;cursor: not-allowed;" title="Delete the issue" >
              
            <article class="one_half first"><i class="icon fa fa-trash-o"></i>
              
            </article>
              </a>
                  <?php } ?>
              </div>
              <a href="issue_status.php?issue_id=<?php echo$row["issue_id"]; ?>" style="color:#000;text-decoration: none;" title="Update the status">
            <article class="one_half"><i class="icon fa fa-pencil"></i>
             
            </article>
              </a>
          </div>
          <!-- / main body -->
        </main>
    </div>
            
            <hr>
            <?php ?>
        
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-2"></div>
                <div class="col-md-8">
            <div class="text-center">
                <center>
                    <img src="Issuephoto//<?php echo $row["related_photo"] ?>" class="img-responsive"  style="max-height: 350px;"/>
                </center>
            </div>
                    <div class="form-group" style="margin-top: 30px;"><h2 style="font-size: 50px;font-family:Angsana New;color: #4C4C4C;"><?php echo $row["issue_title"] ?></h2></div>
            <div class="form-group"><h2 style="font-size: 40px;font-family:Angsana New;color: #777777;"><?php echo $row["issue_type"] ?></h2></div>
            <div class="form-group">
                <?php if($row["product_detail"])
                {
                    ?>
                <h3 style="color:#FF4500;font-size: 20px;">
                     Product detail:
                    <?php echo $row["product_detail"] ?>
                </h3>
                <?php
                }
                ?>
            </div>
            <div class="form-group">
                <h3 style="color:#FF4500;font-size: 20px;">
                    Status : <?php echo $row["issue_status"]; ?>
                </h3>
            </div>
            <?php if($row["admin_comment"]){ ?>
                <div class="form-group"><p style="color:#FF4500;font-size: 20px;">Comment : <?php echo $row["admin_comment"] ?></p></div>
            <?php } ?>
            <div class="form-group"><p style="color: #666666;font-size: 20px;"><?php echo $row["issue_desc"] ?></p></div>
            <hr style="margin-top: 50px;">
            <div class="form-group row" style="padding-top: 30px;padding-bottom: 20px;"><div class="col-md-5"><p style="font-size: 17px;color: #666666;">Added On : <?php echo $row["added_on"];?></p></div></div>
            </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>
<?php include './footer.php'; ?>
