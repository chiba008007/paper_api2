<?php
session_start();

//セッション変数の削除
$_SESSION = array();
//セッション削除
session_destroy();

//ログインページへリダイレクト
header("location: ../admin/login.php");
exit;