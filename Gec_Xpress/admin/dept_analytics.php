<?php 
include '../gecdp.php';
$qry_all_issue="SELECT * FROM issues ";
$result_all_issue= mysqli_query($con, $qry_all_issue);
$all_issue= mysqli_num_rows($result_all_issue);
//echo $all_issue;

$qry_d1_issue="SELECT * FROM issues WHERE dept_name like '%d%'";
$result_d1_issue= mysqli_query($con, $qry_d1_issue);
$d1_issue= mysqli_num_rows($result_d1_issue);
//echo $d1_issue;

$d1_issue_per=($d1_issue*100)/$all_issue;
//echo "$d1_issue_per<br>";

//now for feedback

$qry_all_feed="SELECT * FROM feedback ";
$result_all_feed= mysqli_query($con, $qry_all_feed);
$all_feed= mysqli_num_rows($result_all_feed);
//echo $all_feed;

$qry_d1_feed="SELECT * FROM feedback WHERE dept_name like '%d%'";
$result_d1_feed= mysqli_query($con, $qry_d1_feed);
$d1_feed= mysqli_num_rows($result_d1_feed);
//echo $d1_feed;

$d1_feed_per=($d1_feed*100)/$all_feed;
//echo "$d1_feed_per<br>";

//now for news

$qry_all_news="SELECT * FROM news ";
$result_all_news= mysqli_query($con, $qry_all_news);
$all_news= mysqli_num_rows($result_all_news);
//echo $all_news;

$qry_d1_news="SELECT * FROM `news` WHERE dept_name like '%echani%';";
$result_d1_news= mysqli_query($con, $qry_d1_news);
$d1_news= mysqli_num_rows($result_d1_news);
//echo $d1_news;

$d1_news_per=($d1_news*100)/$all_news;
//echo "$d1_news_per";


$qry_open_isse="SELECT * FROM issues WHERE dept_name like '%d%' AND trash!='yes' AND issue_status='Open'";
$result_opne_issue= mysqli_query($con, $qry_open_isse);
$open_issue= mysqli_num_rows($result_opne_issue);
//echo $open_issue;
$qry_assinged_issue="SELECT * FROM issues WHERE dept_name like '%d%' AND trash!='yes' AND issue_status='Assinged'";
$result_assinged_issue= mysqli_query($con, $qry_assinged_issue);
$assinged_issue= mysqli_num_rows($result_assinged_issue);
//echo $assinged_issue;
$qry_solved_issue="SELECT * FROM issues WHERE dept_name like '%echani%' AND trash!='yes' AND issue_status='Solved'";
$result_solved_issue= mysqli_query($con, $qry_solved_issue);
$solved_issue= mysqli_num_rows($result_solved_issue);
//echo $solved_issue;
$qry_colsed_issue="SELECT * FROM issues WHERE dept_name like '%echani%' AND trash!='yes' AND issue_status='Closed'";
$result_closed_issue= mysqli_query($con, $qry_colsed_issue);
$closed_issue= mysqli_num_rows($result_closed_issue);
//echo $closed_issue;
$qry_notsatisfy_issue="SELECT * FROM issues WHERE dept_name like '%echani%' AND trash!='yes' AND issue_status='Not_satisfied'";
$result_notassinged_issue= mysqli_query($con, $qry_notsatisfy_issue);
$notassinged_issue= mysqli_num_rows($result_notassinged_issue);
//echo $notassinged_issue;
$qry_varifiedclosed_issue="SELECT * FROM issues WHERE dept_name like '%echani%' AND trash!='yes' AND issue_status='Varified_closed'";
$result_varifiedclosed_issue= mysqli_query($con, $qry_varifiedclosed_issue);
$varifiedclosed_issue= mysqli_num_rows($result_varifiedclosed_issue);
//echo $varifiedclosed_issue;

$qry_positive_feed="SELECT * FROM feedback WHERE dept_name like '%d%' AND trash!='yes' AND feedback_rate='Positive'";
$result_positive_feed= mysqli_query($con, $qry_positive_feed);
$positive_feed= mysqli_num_rows($result_positive_feed);
//echo $open_issue;
$qry_negative_feed="SELECT * FROM feedback WHERE dept_name like '%d%' AND trash!='yes' AND feedback_rate='Negative'";
$result_negative_feed= mysqli_query($con, $qry_negative_feed);
$negative_feed= mysqli_num_rows($result_negative_feed);


?>
<html>
  <head>
      <style type="text/css">
      .services
{
	float:left;
}
      </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Department1', 'Status'],
          ['News',     <?php echo $d1_news; ?>],
          ['Issues',      <?php echo $d1_issue; ?>],
          [' open Issues',      <?php echo $open_issue; ?>],
          ['Assigned Issues',      <?php echo $assinged_issue; ?>],
          ['Feedback', <?php echo $d1_feed; ?>],
          ['Positive Feedback',      <?php echo $positive_feed; ?>],
          ['Negative Feedback',      <?php echo $negative_feed; ?>]
       
        ]);
        
         var data2 = google.visualization.arrayToDataTable([
          ['Department1', 'Status'],
          ['News',     <?php echo $d1_news; ?>],
          ['Issues',      <?php echo $d1_issue; ?>],
          [' open Issues',      <?php echo $open_issue; ?>],
          ['Assigned Issues',      <?php echo $assinged_issue; ?>],
          ['Feedback', <?php echo $d1_feed; ?>],
          ['Positive Feedback',      <?php echo $positive_feed; ?>],
          ['Negative Feedback',      <?php echo $negative_feed; ?>]
       
        ]);
        
        
         var data3 = google.visualization.arrayToDataTable([
          ['Department1', 'Status'],
          ['News',     <?php echo $d1_news; ?>],
          ['Issues',      <?php echo $d1_issue; ?>],
          [' open Issues',      <?php echo $open_issue; ?>],
          ['Assigned Issues',      <?php echo $assinged_issue; ?>],
          ['Feedback', <?php echo $d1_feed; ?>],
          ['Positive Feedback',      <?php echo $positive_feed; ?>],
          ['Negative Feedback',      <?php echo $negative_feed; ?>]
       
        ]);
        
        
         var data4 = google.visualization.arrayToDataTable([
          ['Department1', 'Status'],
          ['News',     <?php echo $d1_news; ?>],
          ['Issues',      <?php echo $d1_issue; ?>],
          [' open Issues',      <?php echo $open_issue; ?>],
          ['Assigned Issues',      <?php echo $assinged_issue; ?>],
          ['Feedback', <?php echo $d1_feed; ?>],
          ['Positive Feedback',      <?php echo $positive_feed; ?>],
          ['Negative Feedback',      <?php echo $negative_feed; ?>]
       
        ]);

        var options = {
          title: 'Department1 Analytics',
          is3D: true,
        };
             var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
              chart.draw(data, options);
        
        var options = {
          title: 'Department2 Analytics',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));

        chart.draw(data2, options);
        
        var options = {
          title: 'Department3 Analytics',
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d3'));
          chart.draw(data3, options);
		
            var options = {
          title: 'Department4 Analytics',
          is3D: true,
        };
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d4'));
                    chart.draw(data4, options);
      }
    </script>
  </head>
  <body>
      <div id="piechart_3d" class="services" style="width: 600px; height: 300px;" ></div>
    <div id="piechart_3d2" class="services" style="width: 600px; height: 300px;"></div>
    <div id="piechart_3d3" class="services" style="width: 600px; height: 300px;"></div>
    <div id="piechart_3d4" class="services" style="width: 600px; height: 300px;"></div>
  </body>
</html>