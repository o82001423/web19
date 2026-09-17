﻿<?php include_once "./api/db.php";?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>寶可夢對戰聯盟</title>
    <link href="./css/css.css?v=20260917" rel="stylesheet" type="text/css">
    <script src="./js/jquery-1.9.1.min.js?v=20260917"></script>
    <script src="./js/js.js"></script>
</head>
<style>
.alerr {
    background: rgba(51, 51, 51, 0.8);
    color: #FFF;
    height: 400px;
    width: 400px;
    position: absolute;
    display: none;
    z-index: 9999;
    left: -20px;
    top: -20px;
    overflow: auto;
}
</style>

<body>
    <div id="alerr"
        style="background:rgba(51,51,51,0.8); color:#FFF; min-height:100px; width:300px; position:fixed; display:none; z-index:9999; overflow:auto;">
        <pre id="ssaa"></pre>
    </div>
    <div id="all">
        <div id="title">
            <?= date("m月 d號 l") ?> | 今日瀏覽: <?= $Total->find(['date'=>date("Y-m-d")])['total']; ?> | 累積瀏覽:
            <?= $Total->q("select sum(`total`) as 'sum' from `total`")[0]['sum'] ;?>
            <a href="index.php" style="float:right">回首頁</a>
        </div>
        <div id="title2">
            <a href="index.php" class="pokemon-banner-link">
                <img src="./icon/011.jpg" alt="寶可夢對戰聯盟" title="寶可夢對戰聯盟" class="pokemon-banner-image">
            </a>
        </div>
        <div id="mm">
            <div class="hal" id="lef">
                <a class="blo" href="?do=po">寶可夢圖鑑</a>
                <a class="blo" href="?do=news">最新公告</a>
                <a class="blo" href="?do=pop">熱門對戰</a>
                <a class="blo" href="?do=know">卡牌規則</a>
                <a class="blo" href="?do=que">對戰投票</a>
            </div>
            <div class="hal" id="main">
                <div>
                    <marquee behavior="" direction="" style="width:81%; display:inline-block; color:#1b3f9d; font-weight:700;">
                        訓練家，準備好迎接寶可夢遊戲機對戰與卡牌對戰挑戰了嗎？今日的聯盟戰鬥正式開打！</marquee>
                    <span style="width:18%; display:inline-block;">
                        <?php if(isset($_SESSION['login'])):?>
                        歡迎訓練家，<?= $_SESSION['login'] ?>
                        <?php if($_SESSION['login']=='admin'):?>
                        <br>
                        <button onclick="location.href='admin.php'">管理</button>|
                        <button onclick="location.href='./api/logout.php'">登出</button>
                        <?php else:;?>
                        <button onclick="location.href='./api/logout.php'">登出</button>
                        <?php endif;?>
                        <?php else:?>
                        <a href="?do=login">訓練家登入</a>
                        <?php endif;?>
                    </span>
                    <div class="">
                        <?php 
						$do=$_GET['do']??'main';
						$file="./front/$do.php";
						if(file_exists($file)){
							include $file;
						}else{
							include "./front/main.php";
						}

 						?>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom">
            寶可夢對戰聯盟 © 2026 Trainer Arena All Rights Reserved
            <br>
            聯絡信箱：trainer@pokemon-arena.com<img src="./icon/02B02.jpg" width="45">
        </div>
    </div>

</body>

</html>