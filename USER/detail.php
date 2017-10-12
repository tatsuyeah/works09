<?php

session_start();

include("../functions.php");

//0.  認証チェック
ssidChk();

//1.GETでidを取得
$id = $_GET["id"];

//2.DB接続など
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
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

//ラジオボタン処理
//管理者権限
if($row["kanri_flg"]==0){
    $kanri_ch0 = 'checked';
    $kanri_ch1 = '';
}else{
    $kanri_ch0 = '';
    $kanri_ch1 = 'checked';
}
//ステータス
if($row["life_flg"]==0){
    $life_ch0 = 'checked';
    $life_ch1 = '';
}else{
    $life_ch0 = '';
    $life_ch1 = 'checked';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>本をブックマークするデータベース｜管理ユーザー登録内容変更</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="css/fieldset_style.css">-->
    <style>div{padding: 10px;font-size:16px;}</style>
</head>

<body>
<!-- header[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><p class="navbar-brand">本をブックマークするデータベース｜管理ユーザー登録内容変更</p></div>
    </div>
  </nav>
</header>
<!-- header[End] -->


<!-- Main[Start] -->
<form method="post" action="update.php">
    <div class="container jumbotron">
    <fieldset id="fs">
        <legend>管理ユーザー登録内容変更</legend>
            <ol>
            <li>
                <label>名前</label>
                <input type="text" name="name" size="50" value="<?=$row["name"]?>">
            </li>
            <li>
                <label>ログインID</label>
                <input type="text" name="lid" size="50" value="<?=$row["lid"]?>">
            </li>
            <li>
                <label>ログインパスワード</label>
                <input type="text" name="lpw" size="50" value="<?=$row["lpw"]?>">
            </li>
            <li class="radiobtn">
                <label>管理者権限</label>
                   <div id="btn">
                    <p style="display:inline-block; width:120px; font-size: 16px;">
                        <input type="radio" value="0" name="kanri_flg" <?=$kanri_ch0?>>管理者
                    </p>
                    <p style="display:inline; font-size: 16px;">
                        <input type="radio" value="1" name="kanri_flg" <?=$kanri_ch1?>>スーパー管理者
                    </p>
                   </div>
            </li>
            <li class="radiobtn">
                <label>ステータス</label>
                   <div>
                    <p style="display:inline-block; width:120px; font-size: 16px;">
                        <input type="radio" value="0" name="life_flg" <?=$life_ch0?>>使用する
                    </p>
                    <p style="display:inline; font-size: 16px;">
                        <input type="radio" value="1" name="life_flg" <?=$life_ch1?>>使用しない
                    </p>
                   </div>
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





