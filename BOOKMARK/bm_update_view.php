<?php

session_start();

include("../functions.php");

//0.認証チェック
ssidChk();

//1.GETでidを取得
$id = $_GET["id"];

//2.DB接続など
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

//３．データ表示
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの1行だけ取得
  $row = $stmt->fetch(); //$row["name"]
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>本をブックマークするデータベース｜登録内容変更</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fieldset_style.css">
    <style>div{padding: 10px;font-size:16px;}</style>
</head>

<body>
<!-- header[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><p class="navbar-brand">本をブックマークするデータベース｜登録内容変更</p></div>
    </div>
  </nav>
</header>
<!-- header[End] -->


<!-- Main[Start] -->
<form method="post" action="bm_update.php">
    <div class="container jumbotron">
    <fieldset id="fs">
        <legend>登録内容変更</legend>
            <ol>
            <li>
                <label>書籍名</label>
                <input type="text" name="name" size="50" value="<?=$row["name"]?>">
            </li>
            <li>
                <label>書籍URL</label>
                <input type="text" name="url" size="50" value="<?=$row["url"]?>">
            </li>
            <li>
                <label>書籍コメント</label>
                <textArea name="comment" rows="5" cols="50"><?=$row["comment"]?></textArea>
            </li>
            </ol>
            <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="変更">
    </fieldset>
    
  </div>
</form>
<!-- Main[End] -->


</body>
</html>





