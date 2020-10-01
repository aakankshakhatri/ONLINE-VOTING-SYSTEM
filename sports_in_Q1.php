<html>
<head>
<title>sports_in_Q1</title>
<link rel="stylesheet" type="text/css" href="Quiz.css" />
</head>

<body background="http://localhost/iwp%20voting%20project/datasc.jpg" align="center">

<?php
include ("connection.php");
if (isset($_POST['skill']))
{
	$skill=$_POST["skill"];
    $query=mysqli_query($conn,"INSERT INTO sports_indoor (Q1) VALUES ('$skill')");
	if (query)
	{
		echo "<script> window.location.replace('http://localhost/iwp%20voting%20project/sports_in_Q2.php'); </script>";
	}
}
?>

<button><a href="http://localhost/iwp%20voting%20project/home.html">Back home</a></button><br><br>

<form action="" method="POST" required >
<div class="txt">
Which major skill/s would you choose to use while playing?<br><br>
<input type="radio" name="skill" value="Mental" id="men"/>Mental <input type="radio" name="skill" value="Physical" id="phy"/>Physical <input type="radio" name="skill" value="Both" id="both"/>Both <br><br> 
<button class="button" name="submit"> Next</button> 
</div>
</form>

</body>

</html> 