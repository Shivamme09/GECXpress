<?php
include './gecdp.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        <link rel="icon" href="images/bulb_logo.png"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container">
        <?php
        $qry_dept="SELECT * FROM branch ORDER BY bid";
        $result_dept= mysqli_query($con, $qry_dept);
        ?>
            <div class="wrapper row4" style="margin-bottom: 100px;margin-top: 100px;">
            <main class="hoc container clear">
            <div class="group center" style="">   
            <?php
            $i=0;
        while($row_dept= mysqli_fetch_array($result_dept)){
            if($i%3==0){
            ?>          
                                      
                    <a href="single_dept.php?branchid=<?php echo $row_dept["bid"] ?>"  style="color:#000;text-decoration: none;">
                        <article class="one_third first"><i class="icon fa fa-map-signs"></i>
                            <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';"><?php echo $row_dept["bname"] ?></p></h4>
                        </article>
                    </a>

            <?php
        }else{
            ?>          
                                      
                    <a href="single_dept.php?branchid=<?php echo $row_dept["bid"] ?>"  style="color:#000;text-decoration: none;">
                        <article class="one_third"><i class="icon fa fa-map-signs"></i>
                            <h4 class="font-x1 uppercase"><p style="color:#E84C3D;text-decoration:none;font-size:17px;font-family: Georgia,'Times New Roman', 'Times, serif';"><?php echo $row_dept["bname"] ?></p></h4>
                        </article>
                    </a>

            <?php            
        }
        $i=$i+1;
        }
        ?>
            </div>              
            </main>
            </div>
            </div>
        <?php include './footer.php'; ?>
    </body>
</html>
