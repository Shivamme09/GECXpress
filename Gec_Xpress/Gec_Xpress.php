<?php
include './gecdp.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gec Express</title>
        <meta charset="utf-8">
        <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="icon" href="images/bulb_logo.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        </style>
</head>

<body>    
<?php
include'header.php';
?>
<?php
include './Slider.php';
?>
    <div style="padding-top: 50px;"></div>
        <div class="wrapper row3" style="">
            <main class="hoc container clear">
                
                <!-- main body -->
                
                <div class="center btmspace-50" style="margin-top: 20px;"> 
                    <p class="nospace"><a href="Our_Team/index.html" style="color:#E84C3D;text-decoration:none;font-size:17px;">An initiative of CODE CLUB</a></p>
                    <h2 class="heading font-x3" style="font-size:40px;margin-top:15px;">Welcome to GEC Xpress</h2>
                    <p style="font-size:17px;">Education is the best provision for life's journey</p>
                </div>
                
                <div class="group center" style="">
                    
                    <a  href="News_view.php" style="color:#000;text-decoration: none;">
                        <article class="one_quarter first"><i class="icon fa fa-file-text-o"></i>
                            <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">News</p></h4>
                            <p style="font-size:15px;text-align:justify;text-align-last:center;">Look around the latest ongoing and past activities in your college.</p>
                        </article>
                    </a>
                    
                    <a href="Issue_view.php" style="color:#000;text-decoration: none;">
                        <article class="one_quarter"><i class="icon fa fa-paper-plane"></i>
                            <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Issues</p></h4>
                            <p style="font-size:15px;text-align:justify;text-align-last:center;">Tell about the technical and non-technical issues faced in your college.</p>
                        </article>
                    </a>
                    
                    <a href="Feedback_type.php"  style="color:#000;text-decoration: none;">
                        <article class="one_quarter"><i class="icon fa fa-commenting-o"></i>
                                <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Feedback</p></h4>
                                <p style="font-size:15px;text-align:justify;text-align-last:center;">Give your valuable feedbacks and suggestion to improve your college.</p>
                        </article>                        
                    </a>
                    
                    <a href="departments.php"  style="color:#000;text-decoration: none;">
                        <article class="one_quarter"><i class="icon fa fa-map-signs"></i>
                            <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';">Department</p></h4>
                            <p style="font-size:15px;text-align:justify;text-align-last:center;">Get to know your department and various activities involving your department.</p>
                        </article>
                    </a>
              </div>
                
              <!-- / main body -->
              
            </main>
        </div>
    
<!--    row and column section starts-->

<div class="container-fluid" style="margin-top: 50px;">
		<div class="row">
			<div class="col-md-4">
                            <div class="thumbnail">
                                <a href="News_view.php" target="_blank" style="text-decoration: none;">
                                    <img alt="Nature" src="images/gec.jpg" class="img-responsive" style="height: 300px;"/>
                                        <div class="caption">
                                            <h3 style="text-align: center;color: #757575;">Gec News<hr></h3>
                                                <?php 
                                                    $qry="SELECT * FROM news ORDER BY added_on DESC LIMIT 5";
                                                    $result=mysqli_query($con,$qry);
                                                    //echo $result;
                                                    while($row=mysqli_fetch_array($result))
                                                    {
                                                ?>
                                            <p style="font-size: 15px;"><span class="fa fa-comments" style="font-size: 20px;padding-left: 10px;"></span><span style="padding-left: 10px;"><?php echo substr($row["news_title"],0,40) ;?>.....<?php }?></span></p>
                                                        <hr><p style="text-align: center;color:#E84C3D;font-size: 16px;">More....</p>
                                        </div>
                                </a>
                            </div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
                                    <a href="http://www.csvtu.ac.in" target="_blank" style="text-decoration: none;">
                                        <img alt="" src="images/csvtu1.png" class="img-responsive" style="height: 300px;"/>
					<div class="caption">
                                            <h3 style="text-align: center;color: #757575;">University News<hr></h3>
                                            <?php 
                                                $qry="SELECT * FROM university ORDER BY nid DESC LIMIT 5";
                                                $result=mysqli_query($con,$qry);
                                                //echo $result;
                                                while($row=mysqli_fetch_array($result))
                                                {
                                            ?>
                                            <p style="font-size: 15px;"><span class="fa fa-comments" style="font-size: 20px;padding-left: 10px;"></span><span style="padding-left: 10px;"><?php echo substr($row["title"],0,40) ;?>....<?php }?></span></p>
                                            <hr><p style="text-align: center;color:#E84C3D;font-size: 16px;">More....</p>
					</div>
                                    </a>

				</div>
			</div>
			<div class="col-md-4">
				<div class="thumbnail">
                                    <a href="https://techcrunch.com/" target="_blank" style="text-decoration: none;">
                                        <img alt="" src="images/tech.png" style="height: 300px;" class="img-responsive"/>
                                        <div class="caption">
						<h3 style="text-align: center;color: #757575;">Technology<hr></h3>
                                                <?php include './News_API.php'; ?>
                                            <hr><p style="text-align: center;color:#E84C3D;font-size: 16px;">More....</p>
					</div>
				</a>
				</div>
			</div>
                </div>
</div>

<!--    row and column section ends-->
    
<!--    Quote start-->
<!--<div class="container">
    <div class="alert" style="border:1px solid #E2E0E2;">
        <strong><p style="font-size: 25px;font-family: Gabriola;color:#9B9B9B;">Quote of the day:</p></strong><p style="font-family:Gabriola;font-size: 25px;color:#B0B0B0;">"The sky has never been the limit. We are our own limits. It’s then about breaking our personal limits and outgrowing ourselves to live our best lives."</p>
        <p style="text-align: right;font-family:Gabriola;font-size: 25px;color:#B0B0B0;padding-right:60px; ">-Bill Copeland</p>
    </div>
</div>-->
<!--Quote Ends-->
<?php include './footer.php'; ?>
</body>
</html>