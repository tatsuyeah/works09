<?php
//登録のテンプレとして...

session_start();

include("../functions.php");

//0.  認証チェック
ssidChk();

//1.入力した値をとる
$name      = $_POST["name"];
$lid       = $_POST["lid"];
$lpw       = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg  = $_POST["life_flg"];

//2.DB接続
$pdo = db_con();

//3.SQLを作って実行
//3-1.データ登録SQL作成
$stmt = $pdo->prepare("
INSERT INTO gs_user_table(id, name, lid, lpw, kanri_flg, life_flg)
VALUES(NULL, :name, :lid, :lpw, :kanri_flg, :life_flg)
");
$stmt->bindValue(':name', $name);
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$stmt->bindValue(':kanri_flg', $kanri_flg);
$stmt->bindValue(':life_flg', $life_flg);

//3-2.実行
$status = $stmt->execute();

//4.実行
if($status==false){
  $error = $stmt->errorInfo();//エラーがあれば
  exit("QueryError:".$error[2]);//処理を止めてエラー表示
  
}else{
  header("Location: select.php");//エラーがなければ登録リストを表示（select.php）
  exit;//ページが飛んだら処理を止める

}
?>
