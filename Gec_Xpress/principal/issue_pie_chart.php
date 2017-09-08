<?php 
include '../gecdp.php';
$qry_all_issue="SELECT * FROM issues WHERE trash!='yes'";
$result_all_issue= mysqli_query($con, $qry_all_issue);
$all_issue= mysqli_num_rows($result_all_issue);
//echo $all_issue;
$qry_open_isse="SELECT * FROM issues WHERE trash!='yes' AND issue_status='Open'";
$result_opne_issue= mysqli_query($con, $qry_open_isse);
$open_issue= mysqli_num_rows($result_opne_issue);
//echo $open_issue;
$qry_assinged_issue="SELECT * FROM issues WHERE trash!='yes' AND issue_status='Assinged'";
$result_assinged_issue= mysqli_query($con, $qry_assinged_issue);
$assinged_issue= mysqli_num_rows($result_assinged_issue);
//echo $assinged_issue;
$qry_solved_issue="SELECT * FROM issues WHERE trash!='yes' AND issue_status='Solved'";
$result_solved_issue= mysqli_query($con, $qry_solved_issue);
$solved_issue= mysqli_num_rows($result_solved_issue);
//echo $solved_issue;
$qry_colsed_issue="SELECT * FROM issues WHERE trash!='yes' AND issue_status='Closed'";
$result_closed_issue= mysqli_query($con, $qry_colsed_issue);
$closed_issue= mysqli_num_rows($result_closed_issue);
//echo $closed_issue;
$qry_notsatisfy_issue="SELECT * FROM issues WHERE trash!='yes' AND issue_status='Not_satisfied'";
$result_notassinged_issue= mysqli_query($con, $qry_notsatisfy_issue);
$notassinged_issue= mysqli_num_rows($result_notassinged_issue);
//echo $notassinged_issue;
$qry_varifiedclosed_issue="SELECT * FROM issues WHERE trash!='yes' AND issue_status='Varified_closed'";
$result_varifiedclosed_issue= mysqli_query($con, $qry_varifiedclosed_issue);
$varifiedclosed_issue= mysqli_num_rows($result_varifiedclosed_issue);
//echo $varifiedclosed_issue;

$open_issue_per=($open_issue*100)/$all_issue;
//echo $open_issue_per;
$assinged_issue_per=($assinged_issue*100)/$all_issue;
//echo $assinged_issue_per;
$solved_issue_per=($solved_issue*100)/$all_issue;
//echo $solved_issue_per;
$closed_issue_per=($closed_issue*100)/$all_issue;
//echo $closed_issue_per;
$notassinged_issue_per=($notassinged_issue*100)/$all_issue;
//echo $notassinged_issue_per;
$varifiedclosed_issue_per=($varifiedclosed_issue*100)/$all_issue;
//echo $varifiedclosed_issue_per;


?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Issues', 'Status'],
          ['Open',     <?php echo $open_issue; ?>],
          ['Close',      <?php echo $closed_issue; ?>],
          ['Not satisfied', <?php echo $notassinged_issue; ?>],
          ['Solved', <?php echo $solved_issue; ?>],
          ['Assinged',    <?php echo $assinged_issue; ?>],
          ['Varified close',   <?php echo $varifiedclosed_issue; ?>]
        ]);

        var options = {
          title: 'Issues status'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 500px; height: 300px;"></div>
  </body>
</html>