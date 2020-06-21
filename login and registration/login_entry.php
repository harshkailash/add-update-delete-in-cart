<?php
session_start();
include("db_con.php");
$uid=$_POST['uid'];
$pwd1=$_POST['pwd'];
$uid_check="SELECT * FROM reg_tab WHERE username='$uid' and password='$pwd1'";
$res=$con->query($uid_check);
$row=$res->fetch_assoc();

$_SESSION['role']=$row['role'];

if($row!=0)
{
	if($_SESSION['role']=='A')
		{
			echo("<br>user logged in as admin");
			header("Location:admin.php");
		}
	

	elseif($_SESSION['role']=='C') 
		{
			echo("<br>user logged in as user");
			header("Location:user.php");
		}
}
else
{
echo("<br>wrong credentials");
}
?>