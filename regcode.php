
<?php

$n=$_POST['fullname'];
//echo $n; 
$fn=$_POST['fathername'];
//echo $fn;
$e=$_POST['email'];
//echo $e;
$g=$_POST['a'];
//echo  $g;
$a=$_POST['address'];
//echo $a;
$con=mysqli_connect('localhost','root','','new');
$query="INSERT INTO register (fullname,fathername,email,a,address) values('$n','$fn','$e','$g','$a')";
mysqli_query($con,$query);


?>