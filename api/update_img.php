<?php
include_once "db_info.php";

$see=($_POST['upt_chked']=="true")?1:0; 
$alt=$_POST['upt_alt']; 
$id=$_POST['upt_id']; 

// $filename=(empty($_FILES['file']))?"":$_FILES['file']['name'];

$sql="UPDATE `img` SET `see`='$see', `alt`='$alt' WHERE `id`='$id'";

echo $sql;

$pdo->exec($sql);
// ?>