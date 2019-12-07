<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>後台管理</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
<!--  設定未登入或未註冊時的訊息  -->
<?php
session_start();
if(!isset($_SESSION['login'])){
?>
<style>
body {
    text-align: center;
    padding-top: 10%;
}
</style>
<?php
    echo "未登入或未註冊。<br>";
    echo "請回<a href='./index.html'>首頁</a>登入，或回<a href='./reg.html'>註冊頁面</a>註冊。";
    exit();
}elseif($_SESSION['login']==0){
?>
<style>
body {
    text-align: center;
    padding-top: 10%;
}
</style>
<?php
    echo "未登入成功。<br>";
    echo "請回<a href='./index.html'>首頁</a>重新登入。";
    exit();
}elseif($_SESSION['login']==2){
    ?>
    <style>
    body {
        text-align: center;
        padding-top: 10%;
    }
    </style>
    <?php
        echo "未註冊成功。<br>";
        echo "請回<a href='./reg.html'>註冊頁面</a>重新註冊。";
        exit();
    }
    ?>
<!-- 設定一般樣式 -->
<style>
    .admin {
      width: 100vw;
      height: 100vh;
    }
    .content {
      width: 100%;
      height: 90%;
      box-sizing: border-box;

      float:left;
    }
</style>
</head>
<body>
  <!-- 導覽列 -->
<div class="admin bg-light">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
      aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">管理</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#" onclick="loadpage('data.html')">個人資料</a>
            <a class="dropdown-item" href="#" onclick="loadpage('social_m.html')">社群資料</a>
            <a class="dropdown-item" href="#" onclick="loadpage('edu.html')">學歷資料</a>
            <a class="dropdown-item" href="#" onclick="loadpage('s_intro.html')">自我介紹</a>
            <a class="dropdown-item" href="#" onclick="loadpage('skill.html')">技能資料</a>
            <a class="dropdown-item" href="#" onclick="loadpage('exp.html')">工作經歷</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">預覽履歷</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./api/logout.php">登出</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content bg-light text-dark overflow-auto">

<?php
if($_SESSION['login']==1){
    echo "歡迎登入！請從右方選單選擇要執行的操作。";
}
?>
    </div>
  </div>

<script>
$(function(){
    // 點選載入頁面
    loadpage=(page)=>{
    $('.content').load('./admin/'+page)
    }

// 返回後回到原頁面
<?php
if($_GET['p']=="sm"){
?>
loadpage('social_m.html')
<?php
}
?>

})
</script>
</body>
</html>