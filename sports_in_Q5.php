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

$checkbox1=$_POST["outgame"];
$outgame="";
if (isset($_POST['submit']))
{
		$sql=mysqli_query($conn,"SELECT @v := id FROM sports_indoor ORDER BY id DESC LIMIT 1;");
	    $row=mysqli_fetch_row($sql);
	    $v=$row[0];
		foreach($checkbox1 as $outgame1)
		{
			$outgame .= $outgame1.",";
		}
		
        $query=mysqli_query($conn,"UPDATE sports_indoor SET Q5=CONCAT(Q5, '$outgame') WHERE id='$v'");
	    if (query)
	    {
		    echo "<script> window.location.replace('http://localhost/iwp%20voting%20project/sports_in_Q6.php'); </script>";
	    }
}
?>
<button><a href="http://localhost/iwp%20voting%20project/home.html">Back home</a></button><br><br>

<form action="" method="POST">
<div class="txt">
Which of the following indoor sports would<br> you perfer(one or more respose)?<br>
<input type="checkbox" name="outgame[]" value="Football"/>Football<br>
<input type="checkbox" name="outgame[]" value="Cricket"/>Cricket<br>
<input type="checkbox" name="outgame[]" value="Hockey"/>Hockey<br>
<input type="checkbox" name="outgame[]" value="Baseball"/>Baseball<br>
<input type="checkbox" name="outgame[]" value="Horse Ridding"/>Horse Ridding<br>
<input type="checkbox" name="outgame[]" value="Basketball"/>Basketball<br><br>
<input type="checkbox" name="outgame[]" value="None"/>None<br><br>


<button class="button" name="submit"> Next</button>
</div>
</form>
</body>
</html>