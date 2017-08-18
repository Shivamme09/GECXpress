<?php include './gecdp.php';
 //include './header.php';
    if(isset($_REQUEST["news_id"]))
    {
        $qry="SELECT * FROM news WHERE news_id='".$_REQUEST["news_id"]."'";
        $result= mysqli_query($con, $qry);
        $row= mysqli_fetch_array($result);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>News</title>
                <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="style.css" type="text/css">
          <style>
              .container
              {
                  padding: 0px;
              }
/*              h2
              {
                  font-family:Angsana New;
                  font-size: 50px;
              }
              img
              {
                  max-height: 500px;
              }
              .container
              {
                  padding: 0px;
              }
              h3{
                  color:#FF4500;
                  font-size: 20px;
              }
              h4
              {
                  font-size: 17px;
              }
              p{
                  color: #666666;
                  font-size: 20px;
              }*/
          </style>
          
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
        <div class="container" style="border: 1px solid #ccc;margin-bottom: 50px;margin-top: 50px;">
            <?php if(isset($_SESSION["admin_name"]) && isset($_SESSION["admin_pass"])){ ?>
        
        <div class="wrapper row3 center"  style="margin-top: 80px;">
        <main class="hoc container clear"> 
          <!-- main body -->
          <div class="group center" style="">
              <a href="News_view.php?status=delete&&news_id=<?php echo$_REQUEST["news_id"]; ?>" onClick='return confirmDelete(this);' style="color:#000;text-decoration: none;" title="Delete the news">
            <article class="one_half first"><i class="icon fa fa-trash-o"></i>
              
            </article>
              </a>
              <a href="admin/Post_news.php?status=update&&news_id=<?php echo$_REQUEST["news_id"]; ?>" style="color:#000;text-decoration: none;" title="Update the news">
            <article class="one_half"><i class="icon fa fa-pencil"></i>
             
            </article>
              </a>
          </div>
          <!-- / main body -->
        </main>
    </div>
            <hr>
            <?php } ?>
        
            <div class="row" style="margin-top:50px;">
                <div class="col-md-2"></div>
                <div class="col-md-8">
            <div class="text-center">
                <center>
                    <img src="<?php if($row["related_photo"]){ ?>news/<?php echo $row["related_photo"]; }else{ echo"images/slider3.jpg"; } ?>" class="img-responsive"/>
                </center>                
            </div>
                    <div style="margin-top:20px;margin-left: 0px;">
                        <?php if($row["related_photo"]){ ?>
                        <a href='./news/<?php echo $row["related_photo"] ?>' target='_blank' class='btn btn-default'>See existing File</a>
                        <?php }else{ ?>
                        <a href='images/slider3.jpg' target='_blank' class='btn btn-default'>See existing File</a>
                        <?php } ?>
                    </div>
                    <div class="form-group" style="margin-top: 30px;"><h2 style="font-size: 50px;font-family:Angsana New;color: #4C4C4C;"><?php echo $row["news_title"] ?></h2></div>
            <div class="form-group"><h2 style="font-size: 40px;font-family:Angsana New;color: #777777;"><?php echo $row["news_type"] ?></h2></div>
            <div class="form-group">
                <h3 style="color:#FF4500;font-size: 20px;">
                    This notice is Posted By : 
                    <?php echo $row["creater_id"] ?>
                </h3>
            </div>
            <div class="form-group">
                <h3 style="color:#FF4500;font-size: 20px;">
                    Related Branch : <?php echo $row["dept_name"] ?>
                </h3>
            </div>
            <div class="form-group"><a style="text-decoration: none;" href="<?php echo $row["url"] ?>"><p style="color:#FF4500;font-size: 20px;"><?php echo $row["url"] ?></p></a></div>
            <div class="form-group"><p style="color: #666666;font-size: 20px;"><?php echo $row["news_desc"] ?></p></div>
            <hr style="margin-top: 50px;">
            <div class="form-group row" style="padding-top: 30px;padding-bottom: 20px;"><div class="col-md-5"><p style="font-size: 17px;color: #666666;">Added On : <?php echo $row["added_on"];?></p></div><div class="col-md-1"></div><div class="col-md-6"><p style="float: right;font-size: 17px;color: #666666;">Last Date : <?php echo $row["last_date"] ?></p></div></div>
            </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </body>
</html>
<?php include './footer.php'; ?>
