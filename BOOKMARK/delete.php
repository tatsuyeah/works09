<?php

session_start();

include("../functions.php");

//0.認証チェック
ssidChk();

//1.  id取得
$id = $_GET["id"];

//2.  DB接続します
$pdo = db_con();

//3．データ登録SQL作成
$stmt = $pdo->prepare("DELETE FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//エラーチェックとエラーがなければselect.phpへ
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
    
  header("Location: bm_list_view.php");
  exit;
}













?>