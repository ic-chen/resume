<?php
include_once "db_info.php";

$id=$_POST['del_id'];

$sql="DELETE FROM `edu` WHERE `id`='$id'";

echo $sql;

$pdo->exec($sql);
?>
