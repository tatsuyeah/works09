<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>本をブックマークするデータベース｜ログイン</title>
    <link rel="stylesheet" href="BOOKMARK/css/bootstrap.min.css">
    <link rel="stylesheet" href="BOOKMARK/css/fieldset_style.css">
    <style>div{padding: 10px;font-size:16px;}</style>
</head>

<body>
<!-- header[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><p class="navbar-brand">本をブックマークするデータベース｜ログイン</p></div>
    </div>
  </nav>
</header>
<!-- header[End] -->


<!-- Main[Start] -->
<form method="post" name="form1" action="login_act.php">
    <div class="container jumbotron">
    <fieldset id="fs">
        <legend>ログイン</legend>
            <ol>
            <li>
                <label>ID</label>
                <input type="text" name="lid" size="50">
            </li>
            <li>
                <label>PASS</label>
                <input type="password" name="lpw" size="50"></li>
            </ol>
        <input type="submit" value="ログイン">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
