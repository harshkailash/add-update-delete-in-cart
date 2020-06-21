<?php
session_start();
include("db_con.php");
if(isset($_POST['update']))
{
	 try 
	{
        $con = new PDO("mysql:host=localhost;dbname=iwp","root","");
    } 
    catch (PDOException $exc) 
    {
        echo $exc->getMessage();
        exit();
    }

    	$uid=$_POST['uid'];
		$pid=$_POST['pid'];
		$pname=$_POST['pname'];
		$des=$_POST['des'];
		$cost=$_POST['cst'];
		$ins=$_POST['qty'];

		$sql="UPDATE `inventory` SET `pid`=:pid,`pname`=:pname,`des`=:des,`cost`=:cost,`instock`=:ins WHERE `uid`=:uid";
		
		$res=$con->prepare($sql);
		$exe=$res->execute(array(":uid"=>$uid,":pid"=>$pid,":pname"=>$pname,":des"=>$des,":cost"=>$cost,":ins"=>$ins));

		if($exe)
		{
			echo("data updated");
		}
		else
		{
			echo("error occured");
		}
}
?>