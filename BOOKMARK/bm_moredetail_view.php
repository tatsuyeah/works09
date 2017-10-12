<?php

include("../functions.php");

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
    <title>本をブックマークするデータベース｜詳細</title>
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
        <legend>「<?=$row["name"]?>」詳細画面</legend>
            <ol>
            <li>
                <label>書籍名</label>
                <p><?=$row["name"]?></p>
            </li>
            <li>
                <label>書籍URL</label>
                <p style="font-size:16px;"><a href="<?=$row["url"]?>" target="_blank"><?=$row["url"]?></a></p>
            </li>
            <li>
                <label>書籍コメント</label>
                <p style="font-size:16px;"><?=$row["comment"]?></p>
            </li>
            </ol>
        <input type="button" value="一覧に戻る"  onClick="location.href='bm_list_commonview.php'">
    </fieldset>
    
  </div>
</form>
<!-- Main[End] -->


</body>
</html>





