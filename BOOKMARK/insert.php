<?php
//登録のテンプレとして...

session_start();

include("../functions.php");

//0.認証チェック
ssidChk();

//1.入力した値をとる
$name    = $_POST["name"];
$url     = $_POST["url"];
$comment = $_POST["comment"];

//2.DB接続
$pdo = db_con();


//3.SQLを作って実行
//3-1.データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, name, url, comment, indate)VALUES(NULL, :name, :url, :comment, sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR); 
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
//3-2.実行
$status = $stmt->execute();

//4.実行
if($status==false){
  $error = $stmt->errorInfo();//エラーがあれば
  exit("QueryError:".$error[2]);//処理を止めてエラー表示
  
}else{
  header("Location: bm_list_view.php");//エラーがなければ登録リストを表示（select.php）
  exit;//ページが飛んだら処理を止める

}
?>
