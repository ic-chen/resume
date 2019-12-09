<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];
$s_intro=$_POST['s_intro'];

$sql="INSERT INTO `s_intro`(`acct`, `s_intro`) 
VALUES ('$acct','$s_intro')";

echo $sql;
$pdo->exec($sql);

header("location:../admin.php?p=si");

?>