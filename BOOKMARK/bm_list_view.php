<?php

session_start();

include("../functions.php");

//0.認証チェック
ssidChk();

//1.DB接続（登録するときと同様）
$pdo = db_con();


//3.SQLを作って実行>>表示の値をとる
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table ORDER BY id DESC");
$status = $stmt->execute();

//4.実行>>一覧を表示
$view = "";
if($status==false){
  $error = $stmt->errorInfo();//エラーがあれば
  exit("QueryError:".$error[2]);//処理を止めてエラー表示
  
}else{
  //Selectデータの数だけ自動でループしてくれる
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $view .= '<tr id="cell">';
        $view .=    '<td>';
        $view .=        $result["id"];
        $view .=    '</td>';
        $view .=    '<td>';
        $view .=        $result["name"];
        $view .=    '</td>';
        $view .=    '<td><a target="_blank" href="';
        $view .=        $result["url"];
        $view .=    '">';
        $view .=        $result["url"];
        $view .=    '</a></td>';
        $view .=    '<td>';
        $view .=        $result["comment"];
        $view .=    '</td>';
        $view .=    '<td>';
        $view .=        $result["indate"];
        $view .=    '</td>';
        $view .=    '<td>';
        $view .=        '<a href="bm_update_view.php?id='.$result["id"].'">';
        $view .=        '変更';
        $view .=        '</a>';
        $view .=    '</td>';
        $view .=    '<td>';
        $view .=        '<a href="delete.php?id='.$result["id"].'">';
        $view .=        '削除';
        $view .=        '</a>';
        $view .=    '</td>';
        $view .= '</tr>';
    }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>本をブックマークするデータベース｜リスト表示</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/table_style.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>

<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <p class="navbar-brand">本をブックマークするデータベース｜リスト表示</p>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron">
        <input type="button" id="btn" name="btn" value="本をブックマークする画面へ" onClick="location.href='index.php'">
        <table id="tab">
            <tr id="head">
                <td class="id">登録No.</td>
                <td class="name">書籍名</td>
                <td class="url">書籍URL</td>
                <td class="comment">書籍コメント</td>
                <td class="indate">登録日時</td>
                <td></td>
                <td></td>
            </tr>
            <?= $view ?>
        </table>
        
        <input type="button" id="btn" name="btn" value="本をブックマークする画面へ" onClick="location.href='index.php'">
    </div>
</div>
<!-- Main[End] -->

</body>
</html>
