<?php
include_once "db_info.php";
session_start();

$id=$_SESSION['id'];

$sql="SELECT * FROM `user` WHERE `id`='$id'";

$data=$pdo->query($sql)->fetch();

$acct=$data['acct'];

$sql="SELECT * FROM `social_m` WHERE `acct`='$acct'";

$s_m=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// print_r($s_m);
$num=0;
foreach($s_m as $value){
$s_m_id=$value['id'];
$checked=($value['see']==1)?"checked":"";
$s_m_fb=$value['fb'];
$s_m_ig=$value['ig'];
$s_m_linkedin=$value['linkedin'];
$s_m_github=$value['github'];
$s_m_youtube=$value['youtube'];
$s_m_twitter=$value['twitter'];
$num++;
// echo "<form action='' method='post'>";
echo "<div class='card m-1'>";
echo "<div class='card-body text-left'>";
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <div class='form-check'>";
echo "            <input class='form-check-input' type='radio' id='see$num' $checked>";
echo "            <label class='form-check-label' for='see$num'>顯示</label>";
echo "        </div>";
echo "    </div>";
echo "</div>";
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputFB'>FB</label>";
echo "        <input type='text' class='fb form-control' value='$s_m_fb'>";
echo "    </div>";
echo "</div>";
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputIG'>IG</label>";
echo "        <input type='text' class='ig form-control' value='$s_m_ig'>";
echo "    </div>";
echo "</div>";
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputLinkedIn'>LinkedIn</label>";
echo "        <input type='text' class='linkedin form-control' value='$s_m_linkedin'>";
echo "    </div>";
echo "</div>";
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputGitHub'>GitHub</label>";
echo "        <input type='text' class='github form-control' value='$s_m_github'>";
echo "    </div>";
echo "</div>";
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputYoutube'>Youtube</label>";
echo "        <input type='text' class='youtube form-control' value='$s_m_youtube'>";
echo "    </div>";
echo "</div>";
echo "<div class='form-row'>";
echo "    <div class='form-group col-md-12'>";
echo "        <label for='inputTwitter'>Twitter</label>";
echo "        <input type='text' class='twitter form-control' value='$s_m_twitter'>";
echo "    </div>";
echo "</div>";
echo "    <input type='button' value='更新' class='upt-btn btn btn-primary' id='$s_m_id'>";
echo "    <input type='button' value='刪除' class='del-btn btn btn-primary'>";
echo "</div>";
echo "</div>";
// echo "</form>";
}
?>
