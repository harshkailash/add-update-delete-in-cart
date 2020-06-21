<?php
if(isset($_POST['del']))
{
    try {
        $pdoConnect = new PDO("mysql:host=localhost;dbname=iwp","root","");
    } catch (PDOException $exc) {
        echo $exc->getMessage();
        exit();
    }
    $uid = $_POST['uid'];
    $sql = "DELETE FROM `inventory` WHERE `uid` = :uid";
    $Res = $pdoConnect->prepare($sql);
    $Exe = $Res->execute(array(":uid"=>$uid));   
    if($Exe)
    {
        echo 'Data Deleted';
    }else{
        echo 'ERROR Data Not Deleted';
    }
}

?>