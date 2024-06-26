<?php
require_once "../lib/init.php";
require_once "../lib/function.php";
session();
logincheck();
// 登録

if($_REQUEST[ 'regist' ]){
    $code = randomstr(32,D_CODE);
    $set[ 'code' ] = $code;
    $set[ 'mail' ] = $_REQUEST[ 'mail' ];
    $set[ 'company_link' ] = $_REQUEST[ 'company_link' ];
    settingAccount($pdo,$set);
}
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
    <form action="" method="POST">
        会社<br />
        <input type="text" name="company" value="" />
        <br />メールアドレス<br />
        <input type="text" name="mail" value="" />
        <br />会社URL<br />
        <input type="text" name="company_link" value="" />

        <br />
        <input type="submit" name="regist" value="登録" />
    </form>



<?php include_once("footer.php"); ?>