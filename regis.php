<?php
$con=mysqli_connect("localhost","root","12345678");
mysqli_select_db($con,"purva_database");

$a=$_POST['fname'];
$b=$_POST['email'];
$c=$_POST['pass'];
$pass=md5($c);
$d=$_POST['number'];
$que="INSERT INTO register_task_table(fullname,email,password,contact)VALUES('$a','$b','$pass','$d')";
$result=mysqli_query($con,$que);

if ( false===$result ) {
 printf("error: %s\n", mysqli_error($con));
}
else {
 echo 'done.';
}

header('location:login.php');


?>