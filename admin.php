<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>後台管理</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
<!-- 設定未登入或未註冊時的訊息 -->
<?php
session_start();
if(empty($_SESSION['login'])){
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
    #admin {
        width: 100vw;
        height: 100vh;

        background: gray;
    }
    #menu {
        background: cadetblue;
        
        width: 20%;
        height: 100%;
        box-sizing: border-box;

        float:left;

        text-align: left;
        line-height: 2em;
        padding-left: 2%;
        padding-top: 2%;
    }
    #content {
        background: gray;

        width: 80%;
        height: 100%;
        box-sizing: border-box;

        float:left;
    }
</style>
</head>
<body>
    <div id="admin">
        <div id="menu">
            <a href="#" onclick="loadpage('admin_data.html')">管理個人資料</a>
            <br>
            <a href="#" onclick="loadpage('admin_resume.html')">管理履歷</a>
            <br>
            <a href="./api/logout.php">登出</a>
        </div>
        <div id="content">
<?php
if($_SESSION['login']==1){
    echo "歡迎登入！請從右方選單選擇要執行的操作。";
}
?>
        </div>
    </div>

<script src="./js/jquery-3.4.1.min.js"></script>
<script>
$(function(){
    // 點選載入頁面
    loadpage=(page)=>{
    $('#content').load('./admin/'+page)
    }
})
</script>
</body>
</html>