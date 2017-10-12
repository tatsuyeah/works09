<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>本をブックマークするデータベース｜管理ユーザー追加</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/u_fieldset_style.css">
    <style>div{padding: 10px;font-size:16px;}</style>
</head>

<body>
<!-- header[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><p class="navbar-brand">本をブックマークするデータベース｜管理ユーザー追加</p></div>
    </div>
  </nav>
</header>
<!-- header[End] -->


<!-- Main[Start] -->
<form method="post" action="insert.php">
    <div class="container jumbotron">
    <fieldset id="fs">
        <legend>管理ユーザー追加</legend>
            <ol>
            <li class="list">
                <label style="display:inline-block; width:200px;">名前</label>
                <input type="text" name="name" size="50" style="display:inline;">
            </li>
            <li class="list">
                <label style="display:inline-block; width:200px;">ログインID</label>
                <input type="text" name="lid" size="50" style="display:inline;">
            </li>
            <li class="list">
                <label style="display:inline-block; width:200px;">ログインパスワード</label>
                <input type="password" name="lpw" size="50" style="display:inline;">
            </li>
            <li class="radiobtn">
                <label style="display:inline-block; width:200px;">管理者権限</label>
                   <div  style="display:inline;">
                    <p style="display:inline-block; width:120px; font-size: 16px;">
                        <input type="radio" value="0" name="kanri_flg" checked>管理者
                    </p>
                    <p style="display:inline; font-size: 16px;">
                        <input type="radio" value="1" name="kanri_flg">スーパー管理者
                    </p>
                   </div>
            </li>
            <li class="radiobtn">
                <label style="display:inline-block; width:200px;">ステータス</label>
                   <div style="display:inline;">
                    <p style="display:inline-block; width:120px; font-size: 16px;">
                        <input type="radio" value="0" name="life_flg" checked>使用する
                    </p>
                    <p style="display:inline; font-size: 16px;">
                        <input type="radio" value="1" name="life_flg">使用しない
                    </p>
                   </div>
            </li>
            </ol>
        <input type="submit" value="追加">
    </fieldset>
    <input type="button" value="管理ユーザー一覧" onClick="location.href='select.php'">
    <input type="button" value="ブックマーク画面に戻る" onClick="location.href='../BOOKMARK/index.php'">
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
