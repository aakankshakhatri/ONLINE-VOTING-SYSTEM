<html>
<head>
<title>sports_in_Q2</title>
<link rel="stylesheet" type="text/css" href="Quiz.css" />
</head>
<body background="http://localhost/iwp%20voting%20project/datasc.jpg" align="center">
<?php
include ("connection.php");

if (isset($_POST['board']))
{
	$board=$_POST["board"];
    $sql=mysqli_query($conn,"SELECT @v := id FROM sports_indoor ORDER BY id DESC LIMIT 1;");
	$row=mysqli_fetch_row($sql);
	$v=$row[0];
	$query=mysqli_query($conn,"Update sports_indoor SET Q2='$board' WHERE id='$v'");
	if ($query)
	{
		echo "<script> window.location.replace('http://localhost/iwp%20voting%20project/sports_in_Q3.php'); </script>";
	}
}
?>
<button><a href="http://localhost/iwp%20voting%20project/home.html">Back home</a></button><br><br>

<form action="" method="POST">
<div class="txt">
Do you like board games <br>(like monopoly, chess, ludoo etc)?<br>
<input type="radio" value="Yes" name="board" id="byes"/>Yes <input type="radio" value="No" name="board" id="bno"/> No<br><br>

<button class="button" name="submit"> Next</button>
</div>

</form>

</body>

</html> 