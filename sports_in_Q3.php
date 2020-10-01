<html>
<head>
<title>sports_in_Q3</title>
<script>
function ingames()
{
window.location.replace("http://localhost/iwp%20voting%20project/sports_in_Q4.html");
}
</script>
<link rel="stylesheet" type="text/css" href="Quiz.css" />
</head>
<body background="http://localhost/iwp%20voting%20project/datasc.jpg" align="center">
<?php
$x=1;
include ("connection.php");

$checkbox1=$_POST["ingame"];
$ingame="";
if (isset($_POST['submit']))
{
		$sql=mysqli_query($conn,"SELECT @v := id FROM sports_indoor ORDER BY id DESC LIMIT 1;");
	    $row=mysqli_fetch_row($sql);
	    $v=$row[0];
		foreach($checkbox1 as $ingame1)
		{
			$ingame .= $ingame1.",";
		}
		
        $query=mysqli_query($conn,"UPDATE sports_indoor SET Q3=CONCAT(Q3, '$ingame') WHERE id='$v'");
	    if (query)
	    {
		    echo "<script> window.location.replace('http://localhost/iwp%20voting%20project/sports_in_Q4.php'); </script>";
	    }
}
?>
<button><a href="http://localhost/iwp%20voting%20project/home.html">Back home</a></button><br><br>

<form action="" method="POST">
<div class="txt">
Which of the following indoor sports would<br> you perfer(one or more respose)?<br>
<input type="checkbox" name="ingame[]" value="Badminton"/>Badminton<br>
<input type="checkbox" name="ingame[]" value="Jengas"/>Jengas<br>
<input type="checkbox" name="ingame[]" value="Bowling"/>Bowling<br>
<input type="checkbox" name="ingame[]" value="Table tennis"/>Table tennis<br>
<input type="checkbox" name="ingame[]" value="Squash"/>Squash<br>
<input type="checkbox" name="ingame[]" value="Snooker"/>Snooker<br><br>
<input type="checkbox" name="ingame[]" value="None"/>None<br><br>


<button class="button" name="submit"> Next</button>
</div>
</form>
</body>
</html> 