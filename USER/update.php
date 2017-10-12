<?php

session_start();

include("../functions.php");

//0.  認証チェック
ssidChk();

//1.POSTでParamを取得
$id        = $_POST["id"];
$name      = $_POST["name"];
$lid       = $_POST["lid"];
$lpw       = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg  = $_POST["life_flg"];


//2.DB接続など
$pdo = db_con();

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$stmt = $pdo->prepare("UPDATE gs_user_table SET name=:name, lid=:lid, lpw=:lpw, kanri_flg=:kanri_flg, life_flg=:life_flg WHERE id=:id");
$stmt->bindValue(':name', $name);
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$stmt->bindValue(':kanri_flg', $kanri_flg);
$stmt->bindValue(':life_flg', $life_flg);
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: select.php");
  exit;
}

?>
