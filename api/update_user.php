<?php
include_once "db_info.php";

$psw=$_POST['psw'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$btd=$_POST['btd'];
$email=$_POST['email'];
$tel_cell=$_POST['tel_cell'];
$tel_home=$_POST['tel_home'];
$addr=$_POST['addr'];

$data=$pdo->query($sql)->fetch();
echo json_encode($data);
?>