<?php
include_once "db_info.php";
session_start();

$acct=($_POST['acct']==$_POST['acct_def'])?"":$_POST['acct'];
$psw=($_POST['psw']==$_POST['psw_def'])?"":$_POST['psw'];
$name=($_POST['name']==$_POST['name_def'])?"":$_POST['name'];
$gender=($_POST['gender']==$_POST['gender_def'])?"":$_POST['gender'];
$btd=$_POST['btd'];
$email=($_POST['email']==$_POST['email_def'])?"":$_POST['email'];
$tel_cell=($_POST['tel_cell']==$_POST['tel_cell_def'])?"":$_POST['tel_cell'];
$tel_home=($_POST['tel_home']==$_POST['tel_home_def'])?"":$_POST['tel_home'];
$addr=($_POST['addr']==$_POST['addr_def'])?"":$_POST['addr'];

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