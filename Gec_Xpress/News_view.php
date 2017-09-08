<?php session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include './gecdp.php';
if(isset($_REQUEST["delete"]) && isset($_REQUEST["delete"])=='yes' && isset($_REQUEST["news_id"]))
{
    $qry_e="DELETE FROM news WHERE news_id=".htmlspecialchars($_REQUEST["news_id"],ENT_QUOTES);
    $result_e= mysqli_query($con, $qry_e);
    if($result_e)
    {
        ?><script>alert('News is deleted successfully!!');
                    window.location.href="News_view.php";
        </script><?php
    }
    else
    {
        ?><script>alert('Currently there is a problem to delete the news please try again after some time!!');</script><?php
    }
}
if(htmlspecialchars($_REQUEST["status"],ENT_QUOTES) && htmlspecialchars($_REQUEST["status"],ENT_QUOTES) === 'delete' && htmlspecialchars($_REQUEST["news_id"],ENT_QUOTES)){
    $qry_h="UPDATE news SET trash='yes' WHERE news_id=".htmlspecialchars($_REQUEST["news_id"],ENT_QUOTES);
    echo filter_input(INPUT_POST, "news_id");
    if(mysqli_query($con, $qry_h)){
        ?><script>alert('News is moved to trash!!');
                    window.location.href="News_view.php";
        </script><?php
    }else{
        ?><script>alert('Currently there is a problem to delete the news please try again after some time!!');</script><?php
    }
}

    if(htmlspecialchars($_REQUEST["btndate"],ENT_QUOTES))
    {
        $start= htmlspecialchars($_REQUEST["txtstart"],ENT_QUOTES);
        $end= htmlspecialchars($_REQUEST["txtend"],ENT_QUOTES);
        $qry_s = "SELECT * FROM news WHERE date(added_on) between '" . $start . "' AND '".$end."' AND trash!='yes'";
    }
    elseif(htmlspecialchars ($_REQUEST["btntype"]))
    {
        $type= htmlspecialchars($_REQUEST["txttype"],ENT_QUOTES);
        $qry_s="SELECT * FROM news WHERE news_type='".$type."' AND trash!='yes' ";
    }
    elseif (htmlspecialchars ($_REQUEST["btndept"])) {
        $dept= htmlspecialchars($_REQUEST["txtdept"],ENT_QUOTES);
        $qry_s="SELECT * FROM news WHERE (dept_name LIKE '%".$dept."%' OR dept_name LIKE '%For all%') AND trash!='yes' ORDER BY added_on DESC ";
    }elseif(isset ($_REQUEST["trash"]) && isset ($_REQUEST["trash"])=='yes'){
        $qry_s="SELECT * FROM news WHERE trash='yes' ORDER BY added_on";
    }
    else {
        $qry_s="SELECT * FROM news WHERE trash!='yes' AND (dept_name LIKE '%".$_SESSION["student_branch"]."%' OR dept_name LIKE '%For all%') ORDER BY added_on";
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
        
    </head>
    <body>
        <?php
        include './header.php';
        ?>
        
        
        <!-- Modal of date-->
        <div class="modal fade" id="myModal" role="dialog">
            
            <div class="modal-dialog">
                
            <!-- Modal content-->
                <div class="modal-content">
                    
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Search Notice By Date</h4>
                    </div>
                    
                    <div class="modal-body">
                        <p>
                            <form method="Post" enctype="">
                                <div class="form-group">
                                  <label>Start Date:</label>
                                  <input type="date" class="form-control" id="email" placeholder="Enter Title" name="txtstart" required pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}">
                                </div>
                                <div class="form-group">
                                  <label>End Date:</label>
                                  <input type="date" class="form-control" id="pwd" placeholder="Enter Description" name="txtend" required pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}">
                                </div>
                                
                                <input type="submit" class="btn btn-primary" name="btndate"/>
                            </form>
                        </p>
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

             </div>
        </div>
<!--        modal ends-->
        
<!-- Modal of type-->
        <div class="modal fade" id="myModal2" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Search Notice By notice type</h4>
                  </div>
                  <div class="modal-body">
                    <p><form>
              <div class="form-group">
                <label>Select notice type:</label>
                <?php
                    $qry_t="SELECT * FROM news_type ORDER BY nid";
                    $result_t=mysqli_query($con,$qry_t);
                    echo"<select name = 'txttype' class='form-control' required>
                    <option value=''>Select any one type</option>";
                    while($row_t=mysqli_fetch_array($result_t))
                    {
                        echo "<option value='".$row_t["ntype"]."'>".$row_t["ntype"]."</option>";
                    }
                    echo"</select>";
                ?>                
              </div>
                <input type="submit" class="btn btn-primary" name="btntype"/>
            </form></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
<!--        modal ends-->
        
<!-- Modal of date-->
        <div class="modal fade" id="myModal3" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Search Notice By Department</h4>
                  </div>
                  <div class="modal-body">
                    <p><form>
              <div class="form-group">
                <label>Select the department:</label>
                                <?php
                    $qry_tt="SELECT * FROM branch ORDER BY bid";
                    $result_tt=mysqli_query($con,$qry_tt);
                    echo"<select name = 'txtdept' class='form-control' required>
                    <option value=''>Select any one Department</option>";
                    while($row_tt= mysqli_fetch_array($result_tt))
                    {
                        echo "<option value='".$row_tt["bname"]."'>".$row_tt["bname"]."</option>";
                    }
                    echo"</select>";
                ?> 
                
              </div>
                <input type="submit" class="btn btn-primary" name="btndept"/>
            </form></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
<!--        modal ends-->

                <div style="padding-top: 50px;"></div>
    <div class="wrapper row3 center"  style="">
        <main class="hoc container clear"> 
          <!-- main body -->
          <div class="group center" style="">
              <a href="#" data-toggle="modal" data-target="#myModal" style="color:#000;text-decoration: none;">
            <article class="one_third first"><i class="icon fa fa-clock-o"></i>
              <h4 class="font-x1 uppercase"><p  style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Search News by Date</p></h4>
              
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#myModal2" style="color:#000;text-decoration: none;" >
            <article class="one_third"><i class="icon fa fa-chevron-down"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Search By News Type</p></h4>
             
            </article>
              </a>
              <a href="#" data-toggle="modal" data-target="#myModal3" style="color:#000;text-decoration: none;">
            <article class="one_third"><i class="icon fa fa-map-signs"></i>
              <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Search by Department</p></h4>
             
            </article>
              </a>
          </div>
          <!-- / main body -->
        </main>
    </div>
    
        <div class="row" style="padding-bottom: 50px;"></div>
        <?php
//            $qry_s="SELECT * FROM news ORDER BY added_on";
            //echo $qry_s;
            $result_s=mysqli_query($con,$qry_s);
            while($row_s=mysqli_fetch_array($result_s))
            {
                ?>
                <div class="container" style="margin-bottom: 50px;">
                    <?php
                        if(isset($_REQUEST["trash"]) && isset($_REQUEST["trash"])=='yes')
                        {?>
                            <a class="iframe" href="Single_news.php?delete=yes&&news_id=<?php echo$row_s["news_id"];?>" style="text-decoration: none;">
                        <?php
                        }else{
                        ?>
                            <a class="iframe" href="Single_news.php?news_id=<?php echo$row_s["news_id"];?>" style="text-decoration: none;">
                        <?php
                        }
                        ?>
                        <div class="row" style="border:1px solid #AEADAE;">
                            <div class="col-md-3" style="padding: 0px;"><img style="min-height:180px;max-height: 180px;" src="
                                                                             <?php if($row_s["related_photo"]){
                                                                                    $ext = pathinfo($row_s["related_photo"],PATHINFO_EXTENSION);
                                                                                    if($ext == 'pdf'){
                                                                                        ?>
                                                                                            images/pdffile.png
                                                                                        <?php
                                                                                    }else{
                                                                                            
                                                                                 ?>
                                                                             news/<?php echo $row_s["related_photo"];}}
                                                                                    else{
                                                                                        echo "images/slider3.jpg";
                                                                                    }?>
                                                                             " alt="News related pic"class="img-responsive"/></div>
                            <div class="col-md-9" style="padding-top: 30px;padding-bottom: 30px;font-size: 40px;"><?php echo $row_s["news_title"] ?></div>
                        </div>
                        <div class="row" style="border:1px solid #AEADAE;padding: 15px;border-top: 0px;">
                            <div class="col-md-6" >Date & time  of posted : <span style="color:#6B6A6B;"><?php echo $row_s["added_on"] ?></span></div>
                            <div class="col-md-6">Last Date & Time : <span style="color:#6B6A6B;"><?php echo $row_s["last_date"] ?></span></div>
                        </div>
                    </a>
                </div>
                
                <?php
            }
            include './footer.php';
        ?>
    </body>
</html>
<?php
