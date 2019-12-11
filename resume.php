<?php
include_once "./api/db_info.php";
session_start();

// 取單筆資料
function search($table,...$arg){
    global $pdo;
    $sql="SELECT * FROM $table WHERE ";
    if(is_array($arg[0])){
      foreach($arg[0] as $key => $value){
        $tmp[]=sprintf("`%s`='%s'",$key,$value);
      }
      $sql=$sql . implode(" && ",$tmp);
    }else{
      $sql=$sql . " `id`='".$arg[0]."'";
    }
    //echo $sql;
    return $pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
}
// 取全部資料
function searchAll($table,...$arg){
    global $pdo;
    $sql="SELECT * FROM $table";
      if(!empty($arg[0])){
        foreach($arg[0] as $key => $value){
          $tmp[]=sprintf("`%s`='%s'",$key,$value);
        }
        $sql=$sql . " WHERE " . implode(" && ",$tmp);
      }    
      if(!empty($arg[1])){
        $sql=$sql . $arg[1];
      }
    //echo $sql;
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>履歷</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/all.css">
<style>
    body {
        font-size: 1.2em;
    }
    .row {
        margin: 1em;
    }
    .table-reqs tr th {
        width: 30%;
    }
    .table-contact {
        word-break: break-all;
        word-wrap: break-all;
    }
</style>
</head>
<body class="bg-light">
<div class="container-fluid">

<?php
// 找出使用者帳號
$data=search("user",$_SESSION['id']);
$acct=$data['acct'];
// 撈出求職條件
$reqs=searchAll("reqs",["acct"=>"$acct", "see"=>"1"]);
foreach($reqs as $value){
?>
    <!-- 求職條件 -->
    <div class="reqs row justify-content-center">
        <div class="col-7">
            <div class="card">
                <div class="card-header text-white bg-secondary">
                求職條件
                </div>
                <div class="card-body">
                    <table class="table-reqs table table-borderless table-sm">
                    <tbody>
                        <tr>
                        <th scope="row">期望職務</th>
                        <td><?=$value['reqs_posit'];?></td>
                        </tr>
                        <tr>
                        <th scope="row">工作描述</th>
                        <td><?=$value['reqs_jd'];?></td>
                        </tr>
                        <tr>
                        <th scope="row">可上班時間</th>
                        <td><?=$value['reqs_time'];?></td>
                        </tr>
                        <tr>
                        <th scope="row">期望工作地點</th>
                        <td><?=$value['reqs_place'];?></td>
                        </tr>
                        <tr>
                        <th scope="row">期望工作性質</th>
                        <td><?=$value['reqs_type'];?></td>
                        </tr>
                        <tr>
                        <th scope="row">期望薪資</th>
                        <td><?=$value['reqs_pay'];?></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 分隔線 -->
    <div class="reqs row justify-content-center">
        <div class="col-7">
            <hr>
        </div>
    </div>
<?php
}
?>

<?php
// 撈出自我介紹和自傳
$s_intro=searchAll("s_intro",["acct"=>"$acct", "see"=>"1"]);
// 撈出社群資料
$social_m=searchAll("social_m",["acct"=>"$acct", "see"=>"1"]);
// 撈出學歷資料
$edu=searchAll("edu",["acct"=>"$acct", "see"=>"1"]);
?>
    <div class="resume row justify-content-center">
        <!-- 履歷左欄 -->
        <div class="left col-3">
            <!-- 姓名區塊 -->
            <div class="name card text-center">
                <div class="card-body">
                    <h5 class="card-title h2"><?=$data['name'];?></h5>
                    <?php
                    foreach($s_intro as $value){
                    ?>
                    <p class="card-text"><?=$value['s_intro'];?></p>
                    <?php
                    }
                    ?>
                    <p class="card-text"><small class="text-muted"><?=$data['addr'];?></small></p>
                </div>
            </div>

            <!-- 聯絡資訊和社群資料 -->
            <div class="contact card mt-4">
                <div class="card-header">
                聯絡資訊
                </div>
                <div class="card-body">
                    <table class="table-contact table table-borderless table-sm">
                    <tbody>
                    <tr>
                    <td><i class="far fa-envelope fa-lg"></i></th>
                    <td><?=$data['email'];?></td>
                    </tr>
                <?php
                foreach($social_m as $value) {
                    if(!empty($value['fb'])) {
                ?>
                    <tr>
                    <td><i class="fab fa-facebook-f fa-lg"></i></td>
                    <td><?=$value['fb'];?></td>
                    </tr>
                <?php
                    }
                    if(!empty($value['ig'])) {
                ?>
                    <tr>
                    <td><i class="fab fa-instagram fa-lg"></i></td>
                    <td><?=$value['ig'];?></td>
                    </tr>
                <?php
                }
                if(!empty($value['linkedin'])) {
                ?>
                    <tr>
                    <td><i class="fab fa-linkedin-in fa-lg"></td>
                    <td><?=$value['linkedin'];?></td>
                    </tr>
                <?php
                }
                if(!empty($value['github'])) {
                ?>
                    <tr>
                    <td><i class="fab fa-github fa-lg"></i></td>
                    <td><?=$value['github'];?></td>
                    </tr>
                <?php
                }
                if(!empty($value['youtube'])) {
                ?>
                    <tr>
                    <td><i class="fab fa-youtube fa-lg"></i></td>
                    <td><?=$value['youtube'];?></td>
                    </tr>
                <?php
                }
                if(!empty($value['twitter'])) {
                ?>
                    <tr>
                    <td><i class="fab fa-twitter fa-lg"></i></td>
                    <td><?=$value['twitter'];?></td>
                    </tr>
                <?php
                    }
                }
                ?>
                    </tbody>
                    </table>
                </div>
            </div>
            <!-- 學歷資料 -->
            <div class="edu card mt-4">
                <div class="card-header">
                學歷
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>
                </div>
            </div>
        </div>
        <!-- 履歷右欄 -->
        <div class="right col-4">
            <div class="s_intro card">
                <div class="card-header">
                自傳
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>
                </div>
            </div>
            <div class="skill card mt-4">
                <div class="card-header">
                工作技能
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>
                </div>
            </div>
            <div class="exp card mt-4">
                <div class="card-header">
                工作經歷
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>