<?php
include("db_con.php");
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$des=$_POST['des'];
$cost=$_POST['cst'];
$ins=$_POST['qty'];
$sql="INSERT into inventory(`uid`,`pid`,`pname`,`des`,`cost`,`instock`) VALUES('0','$pid','$pname','$des','$cost','$ins')";
$res=$con->query($sql);
?>