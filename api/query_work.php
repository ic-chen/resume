<?php
include_once "db_info.php";

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];

$sql="SELECT * FROM `work` WHERE `acct`='$acct'";

$work=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

$num=0;
foreach($work as $value){
$work_id=$value['id'];
$checked=($value['see']==1)?"checked":"";
$filename=$value['filename'];
$name=$value['name'];
$url=$value['url'];
$num++;

echo "<div class='card m-1'>";
echo "<div class='card-body text-left'>";

// 第一列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <div class='form-check'>";
echo "            <input class='form-check-input' type='checkbox' id='see$num' $checked>";
echo "            <label class='form-check-label' for='see$num'>在履歷中顯示</label>";
echo "        </div>";
echo "    </div>";
echo "</div>";

// 第二列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <img src='./img/$filename' alt='$filename' class='img-thumbnail'>";
echo "    </div>";
echo "</div>";

// 第三列
// echo "<div class='form-row'>";
// echo "    <div class='form-group col-md-12'>";
// echo "        <label for='exampleFormControlFile1'>請選擇一張圖片</label>";
// echo "        <input type='file' class='form-control-file' id='exampleFormControlFile1' type='file' name='img'>";
// echo "    </div>";
// echo "</div>";

// 第四列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputName'>作品名稱</label>";
echo "        <input type='text' class='form-control' name='name' value='$name'>";
echo "    </div>";
echo "</div>";

// 第五列
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputURL'>URL</label>";
echo "        <input type='text' class='form-control' value='$url'>";
echo "    </div>";
echo "</div>";

// 按鈕列
echo "    <input type='button' value='更新' class='upt-btn btn btn-primary' id='$work_id'>";
echo "    <input type='button' value='刪除' class='del-btn btn btn-primary'>";

// 收尾標籤
echo "</div>";
echo "</div>";
}
?>
