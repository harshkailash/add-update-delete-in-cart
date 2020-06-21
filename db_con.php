<?php
$con=new mysqli("localhost","root","","iwp");
if($con -> connect_errno)
{
	echo("could not connect db");
}
else
{
	echo("connection success");
}
?>