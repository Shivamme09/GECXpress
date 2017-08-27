<?php 
include '.././gecdp.php';
if(isset($_REQUEST["btnsubmit"]))
{
    $title=$_REQUEST["txttitle"];
    $qry="INSERT INTO university
        (title)
        VALUES
        ('".$title."');
        ";
    echo $qry;
    $result=mysql_query($qry,$con);
    if($result)
    {
        ?>
            <script>alert('News submitted');
            //window.location.href="User_home.php";
            </script>
            <?php
    }
     
        else {
               ?>

            <script type='text/javascript'>
                var str="<?php echo mysql_error(); ?>";  
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
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="txttitle" value="" />
            <input type="submit" name="btnsubmit"/>
        </form>
    </body>
</html>
