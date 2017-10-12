<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>本をブックマークするデータベース｜DB登録</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fieldset_style.css">
    <style>div{padding: 10px;font-size:16px;}</style>
</head>

<body>
<!-- header[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><p class="navbar-brand">本をブックマークするデータベース｜DB登録</p></div>
    </div>
  </nav>
</header>
<!-- header[End] -->


<!-- Main[Start] -->
<form method="post" action="insert.php">
    <div class="container jumbotron">
    <fieldset id="fs">
        <legend>本をブックマーク</legend>
            <ol>
            <li>
                <label>書籍名</label>
                <input type="text" name="name" size="50">
            </li>
            <li>
                <label>書籍URL</label>
                <input type="url" name="url" size="50" value="http://"></li>
            <li>
                <label>書籍コメント</label>
                <textArea name="comment" rows="5" cols="50"></textArea></li>
            </ol>
        <input type="submit" value="送信">
    </fieldset>
    <input type="button" value="ブックマーク表示" onClick="location.href='bm_list_commonview.php'">
    <input type="button" value="管理ユーザー追加" onClick="location.href='../USER/index.php'">
    <input type="button" value="管理ユーザー一覧" onClick="location.href='../USER/select.php'">
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
