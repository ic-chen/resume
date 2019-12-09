<?php
include_once "db_info.php";

$see=($_POST['upt_chked']=="true")?1:0;
$s_intro=$_POST['upt_s_intro'];
$id=$_POST['upt_id'];

$sql="UPDATE `s_intro` SET `see`='$see',`s_intro`='$s_intro' WHERE `id`='$id'";

echo $sql;

$pdo->exec($sql);
?>