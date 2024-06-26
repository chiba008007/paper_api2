<?php
require_once "../lib/init.php";
require_once "../lib/function.php";
session();
logincheck();
?>

<?php include_once("header.php"); ?>
    <style>
        body{
            font: 14px sans-serif;
        }
        .wrapper{
            width: 400px;
            padding: 20px;
            margin: 0 auto;
        }
    </style>
    <a href="logout.php" class="">ログアウト</a>
    <a href="setting.php" class="">名刺データ登録</a>
    


<?php include_once("footer.php"); ?>