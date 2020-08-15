<?php
$con=mysqli_connect("localhost","root","","practice") or die ("DATABASE NOT CONNECTED");
if($_POST['submit'])
{
$name=$_POST['name'];
$class=$_POST['class'];
$rl=$_POST['roll'];
if($name!="" && $class!="" && $rl!=""){
$query="INSERT INTO info (name,class,roll) VALUES ('$name','$class',$rl)";
$total=mysqli_query($con,$query);
if($total){
    echo "Records inserted successfully.";
}
 else{
    echo "All field are required";
}
}
}
?>