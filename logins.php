<?php
$con=mysqli_connect("localhost","root","","practice") or die ("DATABASE NOT CONNECTED");
$name=$_POST['name'];
$pass=$_POST['class'];
$query="SELECT * FROM INFO WHERE name='$name',class='$pass'";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if($total==1){
    header('location:list.php');
}
else{
    echo "unvalid username or passwors";
}
?>