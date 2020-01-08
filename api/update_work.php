<?php
include_once "db_info.php";

$see=($_POST['upt_chked']=="true")?1:0; 
$name=$_POST['upt_name']; 
$url=$_POST['upt_url']; 
$id=$_POST['upt_id']; 

// $filename=(empty($_FILES['file']))?"":$_FILES['file']['name'];

$sql="UPDATE `work` SET `see`='$see', `name`='$name', `url`='$url' WHERE `id`='$id'";

echo $sql;

$pdo->exec($sql);
// ?>