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
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        include './gecdp.php';
$qry="SELECT * FROM faculty_profile ORDER BY fid";
$result= mysqli_query($con, $qry);

echo "<table width=100% border=1>
<tr style='background-color:#FFCCCC'>
<td width=70>ID</td>

<td width=130>NAME</td>
<td width=130>Position</td>
<td width=100>DEPARTMENT</td>
<td width=120>QUALIFICATION</td>
<td width=80>IMAGE</td>
<td width=100>EXPERIENCE</td>
<td width=80>SUBJECT</td>
<td width=100>RESEARCH AREA</td>
<td width=100>UPDATE</td>
<td width=100>DELETE</td>
</tr>";
$c=1;
while($row= mysqli_fetch_array($result))
{
    if($c%2==0)
    {
       echo "<tr style='background-color:#CCCCFF'>"; 
    }
 else {
       echo "<tr style='background-color:#CCCCFF'>"; 
      }
   echo"<td>".$row["fid"]."</td>"; 
    echo"<td>".$row["fname"]."</td>"; 
    echo"<td>".$row["type"]."</td>"; 
     echo"<td>".$row["department"]."</td>"; 
      echo"<td>".$row["qualification"]."</td>"; 
      ?>
    <td> <img src="facultyimage/<?php echo $row["image"] ?>" style="height: 50px; width: 50px;"></td>  
      <?php
      //echo"<td><img src=facultyimgage/pasta.jpg></td>"; 
      echo"<td>".$row["experience"]."</td>"; 
        echo"<td>".$row["subject"]."</td>"; 
        echo"<td>".$row["researcharea"]."</td>"; 
        echo"<td><a href='faculty_register.php?id=".$row["fid"]."&status=edit' style='text-decoration:none'>Edit</a>";
       echo"<td><a href='faculty_detail.php?id=".$row["fid"]."&status=delete' style='text-decoration:none; text-align:center'>Delete</a>";
        echo "</tr>";
      $c++;
}
echo "</table>";
        ?>
    </body>
</html>
