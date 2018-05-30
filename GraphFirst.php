<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Graphs</title>
</head>


<style>

body{
	
	background-color:#666;

	
}


</style>


<?php
include("connect.php");

$qr1="SELECT COUNT(STATUS) FROM register_info where Status='NOT ALLOWED'";

$er=mysql_query($qr1,$sn);

$e1=mysql_fetch_array($er);

$qr2="SELECT COUNT(STATUS) FROM register_info where Status='Accepted'";

$ed=mysql_query($qr2,$sn);

$ed2=mysql_fetch_array($ed);

$qr3="SELECT COUNT(STATUS) FROM register_info where Status='Rejected'";

$es=mysql_query($qr3,$sn);

$ed3=mysql_fetch_array($es);


?>

<body>

<h3 style="color:#F00;font-size:large;text-align:center;">STUDENT INFOMATIVE CHART</h3>


<script type="application/javascript" src="https://www.gstatic.com/charts/loader.js" ></script>
<script>

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);



 function drawChart() {
      // Define the chart to be drawn.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Element');
      data.addColumn('number', 'Percentage');
      data.addRows([
        ['NOT ALLOWED STUDENTS',<?php echo $e1[0] ?>],
        ['ACCEPTED APPLICATION', <?php echo $ed2[0] ?>],
		['REJECTED APPLICATION', <?php echo $ed3[0] ?>],
        //['Other', 0.01]
      ]);

      // Instantiate and draw the chart.
      var chart = new google.visualization.PieChart(document.getElementById('myPieChart'));
      chart.draw(data, null);
    }
  </script>


</head>
<body>
<center>
<div id="myPieChart" style="width:700px;color:#666;" />

</center>
<br /><br />
<center>
<p style="color:#FFF;">
<?php

	echo "NOT ALLOWED STUDENTS ARE $e1[0].<br>"; 
	echo "ACCEPTED APPLICATION ARE $ed2[0].<br>";
	echo "REJECTED APPLICATION ARE $ed3[0].<br>";
	


?>
</p>
</center>

</body>
</html>