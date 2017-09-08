<?php
include './gecdp.php';
if(isset($_REQUEST["trash"]) && isset($_REQUEST["trash"])=='yes' && isset($_REQUEST["admin_name"]) ){
    $qry_h="UPDATE admin SET trash='yes' WHERE admin_name='".$_REQUEST["admin_name"]."'";
        echo $qry_h;
    if(mysqli_query($con, $qry_h)){
        //echo "vikash";
        ?><script>alert('Moved to trash!!');
                    window.location.href="view_admin.php";
        </script><?php
    }else{
        ?><script>alert('Currently there is a problem to delete the news please try again after some time!!');</script><?php
    }
}
if(isset($_REQUEST["trash"]) && isset($_REQUEST["trash"])=='yes'){
$qry="SELECT * FROM admin WHERE admin_type='".$_REQUEST["admin_type"]."' AND trash='yes';";
}else{
    $qry="SELECT * FROM admin WHERE admin_type='".$_REQUEST["admin_type"]."' AND trash!='yes';";
}
$result= mysqli_query($con, $qry);
?>
<!Doctype html>
<html>
    <head>
        <title>View Admin</title>
        <meta charset="utf-8">
        <link rel="icon" href="images/bulb_logo.png"/>
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include './header.php'; ?>
        <div class="container-fluid table-responsive" style="margin-top: 50px;margin-bottom: 50px;">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Admin type:</th>
                        <th>Admin name:</th>
                        <th>Admin email:</th>
                        <th>Delete</th>
<!--                        <th>Update</th>
                        <th>Delete</th>-->
                    </tr>
                </thead>
                <tbody>
                    <?php while($row= mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?php echo $row["admin_type"]; ?></td>
                        <td><?php echo $row["admin_name"]; ?></td>
                        <td><?php echo $row["admin_email"]; ?></td>
                        <td><a href="view_admin.php?trash='yes'&&admin_type=HOD&&admin_name=<?php echo $row["admin_name"] ?>">Delete</a></td>
<!--                        <td class="text-center"><a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td class="text-center"><a href="#" style="text-decoration: none;"><span class="glyphicon glyphicon-trash"></span></a></td>-->
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>