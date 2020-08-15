<html>
	<body>
		<form action="" method="POST">
		Name:
		<input type="text" name="name" value=""/><br><br>
		Class:
		<input type="text" name="class" value=""/><br><br>
		Roll No:
		<input type="text" name="Roll" value=""/><br><br>
		<input type="submit" name="submit" value="submit"/>
</form>
</body>
	</html>
<?php
$con=mysqli_connect("localhost","root","","unii") or die("DATABASE NOT CONNECTED");
$name=$_POST['name'];
$cls=$_POST['class'];
$rl=$_POST['Roll'];
$query="INSERT INTO STUDENT VALUES('ishmam','cs','97')";
mysqli_query($con,$query);
echo $rl,$name,$cls;

?>