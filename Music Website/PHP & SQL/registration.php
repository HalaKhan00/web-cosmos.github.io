<?php
 session_start();
$con = mysqli_connect('localhost' , 'root');

mysqli_select_db($con, 'userregistration');
$f_name = $_POST['fname'];
$l_name = $_POST['lname'];
$addr = $_POST['email'];
$pass = $_POST['pass'];
$C_pass = $_POST['password'];
$s = " select * from usertable where fname = '$f_name'";
$result = mysqli_query($con , $s);
$num = mysqli_num_rows($result);

if($num == 1)
{
echo "Username Already Taken";
}
else
{
$reg = " insert into usertable(fname , lname , email , pass , password) values ($f_name , $l_name , $addr , $pass , $C_pass)";
mysqli_query ($con , $reg);
echo "Registration Successful";
}
?>