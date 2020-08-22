<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- JS -->
  <script src="script.js"></script>
  <!-- タイトル -->
  <title>My Portfolio</title>
</head>

<body>
  <div class="wrapper">
  <!-- ヘッダー -->
  <header>Welcome to My portfolio!!</header>
  <!-- ナビメニュー -->
  <ul id="nav">
  <li><a href="index.php">HOME</a></li>
  <li><a href="seisaku.php" method="post">制作物</a></li>
  <li><a href="game.php">ゲーム</a></li>
  <li><a href="toiawase.php">お問い合わせ</a></li>
</ul>

  <div class="container">
    <div class="main">
      <div class="mainmain">
        <div class="mainhello">お問い合わせ</div>
        <div class="main_container">
<!-- 問い合わせデータをデータベースに送信 -->
<?php
// エラー表示モード
ini_set('display_errors',1);

$namae=htmlspecialchars($_POST["namae"], ENT_QUOTES);
$kaisya=htmlspecialchars($_POST["kaisya"], ENT_QUOTES);
$denwa=htmlspecialchars($_POST["denwa"], ENT_QUOTES);
$mail=htmlspecialchars($_POST["mail"], ENT_QUOTES);
$mail2=htmlspecialchars($_POST["mail2"], ENT_QUOTES);
$messages=htmlspecialchars($_POST["messages"], ENT_QUOTES);

try{
  $db = new PDO('mysql:host=localhost;dbname=myportfolio;charset=utf8', 'root', 'root');
  $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
  echo $e->getMessage();
  exit;
}

$sql = 'INSERT INTO tb (namae,kaisya,denwa,mail,mail2,messages) VALUES (:namae, :kaisya, :denwa, :mail, :mail2, :messages)';

$stmt = $db->prepare($sql);
$stmt->bindParam(':namae', $namae, PDO::PARAM_STR);
$stmt->bindParam(':kaisya', $kaisya, PDO::PARAM_STR);
$stmt->bindParam(':denwa', $denwa, PDO::PARAM_STR);
$stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
$stmt->bindParam(':mail2', $mail2, PDO::PARAM_STR);
$stmt->bindParam(':messages', $messages, PDO::PARAM_STR);

try{
  $stmt->execute();
} catch (Exception $e){
  echo $e->getMessage();
}
print "送信が完了しました！！";
print "<p><a href='toiawase.php'>戻る</p>";

?>

        </div>
      </div>
      </div>
    <!-- サイド -->
    <div class="side">
        <div class="sidecontent">
          <div class="sidecontenth1">オススメの○○</div>
          <ul>
            <li><a href="http://catmocha.jp/?gclid=Cj0KCQiAtOjyBRC0ARIsAIpJyGOcR7CsSZlqVUp_aj9Oa0f6GDT3M9Vv8oHMcOzJNi09rvx8Dxq2NCUaAsu1EALw_wcB">オススメの猫カフェ</a></li>
            <li><a href="#">オススメの本</a></li>
            <li><a href="#">オススメの映画</a></li>
            <li><a href="#">最近買ってよかったもの</a></li>
            <li><a href="#">私の地元について</a></li>
            <li><a href="#">オススメのカフェ</a></li>
            <li><a href="#">自社サービス</a></li>
          </ul>
        </div>
      </div>
  </div>

  

  <footer>footer</footer>

 </div>

  
</body>
</html>