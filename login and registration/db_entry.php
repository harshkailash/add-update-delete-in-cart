<?php
include("db_con.php");
$uname=$_POST['uname'];
$pwd=$_POST['psw'];
$fname=$_POST['fname'];
$add=$_POST['add'];
$g=$_POST['gender'];
$dob=$_POST['dob'];
$r=$_POST['ac'];
$sql="INSERT into reg_tab(`sid`,`username`,`password`,`first name`,`address`,`gender`,`dob`,`role`) VALUES('0','$uname','$pwd','$fname','$add','$g','$dob','$r')";
$res=$con->query($sql);
?>