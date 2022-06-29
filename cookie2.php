<?php
setcookie("name","rocky",time()+60 ,"/","",0);
setcookie("name","205",time()+60 ,"/","",0);
setcookie("branch","computerscience",time()+60,"/"," ",0)
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> creation of cookie 2</title>
</head>
<body>
	<?php
	/* accecing the cookie data*/
	echo "student details <br>";
	echo("name=".$_COOKIE['name']."<br>");
	echo("rollno=".$_COOKIE['rollno']."<br>");
	echo("branch=".$_COOKIE['branch']."<br>")  

 



	 ?>


</body>
</html>