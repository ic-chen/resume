<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];
$see=($_POST['psw']==$_POST['psw_def'])?"":$_POST['psw'];
$fb=($_POST['name']==$_POST['name_def'])?"":$_POST['name'];
$ig=($_POST['gender']==$_POST['gender_def'])?"":$_POST['gender'];
$linkedin=$_POST['btd'];
$github=($_POST['email']==$_POST['email_def'])?"":$_POST['email'];
$youtube=($_POST['tel_cell']==$_POST['tel_cell_def'])?"":$_POST['tel_cell'];
$twitter=($_POST['tel_home']==$_POST['tel_home_def'])?"":$_POST['tel_home'];

$sql="INSERT INTO `user`(`acct`, `psw`, `name`, `gender`, `btd`, `email`, `tel_cell`, `tel_home`, `addr`) 
VALUES ('$acct', '$psw', '$name', '$gender', '$btd', '$email', '$tel_cell', '$tel_home', '$addr')";

echo $sql;
$chk=$pdo->exec($sql);

if($chk==1) {
    $_SESSION['login']=1;
    header("location:../admin.php");
} else {
    $_SESSION['login']=2;
    header("location:../admin.php");
}

?>