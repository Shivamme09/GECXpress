<?php
    include '../gecdp.php';
    $qry_news_type="SELECT * FROM news_type WHERE trash!='yes'";
    $result_news_type= mysqli_query($con, $qry_news_type);
    $news_type= mysqli_num_rows($result_news_type);
?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['News type', 'Percentage of news'],
          <?php while($row_news_type= mysqli_fetch_array($result_news_type)){
              
              $qry_news_type_single="SELECT * FROM news WHERE news_type='".$row_news_type["ntype"]."'";
              //echo $qry_news_type_single;
              $result_news_type_single= mysqli_query($con, $qry_news_type_single);
              $news_type_single= mysqli_num_rows($result_news_type_single);
              //echo $news_type_single;
              ?>
                     
          ['<?php echo $row_news_type["ntype"]; ?>',<?php echo $news_type_single; ?>],
          <?php } ?>
        ]);

        var options = {
          title: 'Number of news according to the news type',
          is3D:true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 500px; height: 300px;"></div>
    <?php include './feedchart.php'; ?>
  </body>
</html>