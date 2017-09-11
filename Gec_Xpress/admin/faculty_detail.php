<?php 
include './gecdp.php';
$qry="SELECT * FROM faculty_profile ORDER BY fid";
$result= mysqli_query($con, $qry);
?>
<!Doctype html>
<html>
    <head>
        <title>Teachers Details</title>
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
                        <th>DEPARTMENT</th>
                        <th>POSITION</th>
                        <th>NAME</th>
                        <th>PHOTO</th>
                        <th>QUALIFICATION</th>
                        <th>EXPERIENCE</th>
                        <th>SUBJECT THOUGHT'S</th>
                        <th>RESEARCH AREA</th>
                        <th>MOBILE</th>
                        <th>EMAIL-ID</th>
                        <th>UPDATE</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row= mysqli_fetch_array($result)){ ?>
                    <tr>
                        <td><?php echo $row["department"]; ?></td>
                        <td><?php echo $row["type"]; ?></td>
                        <td><?php echo $row["fname"]; ?></td>
                        <td><img src="facultyimage/<?php echo $row["image"] ?>" style="height: 50px; width: 50px;" class="img-responsive"/></td>                        
                        <td><?php echo $row["qualification"]; ?></td>
                        <td><?php echo $row["experience"]; ?></td>
                        <td><?php echo $row["subject"]; ?></td>
                        <td style="height: 20px;width: 60px"><?php echo $row["researcharea"]; ?></td>
                        <td><?php echo $row["mobile"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
              <?php 
              
                  echo"<td><a href='faculty_register.php?id=".$row["fid"]."&status=edit' style='text-decoration:none'>Edit</a>";
       echo"<td><a href='faculty_detail.php?id=".$row["fid"]."&status=delete' style='text-decoration:none; text-align:center'>Delete</a>";
       ?>         
                    
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
        <?php include './footer.php'; ?>
    </body>
</html>


<!-- DElete querying-->
<?php
if(isset($_REQUEST["id"]) && $_REQUEST["status"]=="delete")
{
   include'gecdp.php';
   $qry_m="DELETE FROM faculty_profile WHERE fid=".$_REQUEST["id"];
   $result= mysqli_query($con, $qry_m);
   if($result)
    {
        ?>
            <script>
                alert("Successfully delete");
            </script>    
        <?php
    }
    else{
        ?>
            
 
            <script type='text/javascript'>
    var str="<?php echo mysqli_error($con); ?>";  
    var res=str.replace(/'/g,"");
    
    alert(res);
            </script>
            <?php
    }

}?>