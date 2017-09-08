<?php 
include '../gecdp.php';
$qry_feed="SELECT * FROM feedback WHERE trash!='yes'";
$result_feed= mysqli_query($con, $qry_feed);
$all_feed= mysqli_num_rows($result_feed);
//echo $all_issue;
$qry_positive_feed="SELECT * FROM feedback WHERE trash!='yes' AND feedback_rate='Positive'";
$result_positive_feed= mysqli_query($con, $qry_positive_feed);
$positive_feed= mysqli_num_rows($result_positive_feed);
//echo $open_issue;
$qry_negative_feed="SELECT * FROM feedback WHERE trash!='yes' AND feedback_rate='Negative'";
$result_negative_feed= mysqli_query($con, $qry_negative_feed);
$negative_feed= mysqli_num_rows($result_negative_feed);


$positive_feed_per=($positive_feed*100)/$all_feed;
//echo $open_issue_per;
$negative_feed_per=($negative_feed*100)/$all_feed;
//echo $assinged_issue_per;



?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['feedback', 'rate'],
          
          ['Negative',      <?php echo $positive_feed_per; ?>],
          
          ['Positive', <?php echo $negative_feed_per; ?>]
          
         
        ]);

        var options = {
          title: 'feedback rate'
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