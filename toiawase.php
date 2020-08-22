<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS -->
  <link rel="stylesheet" href="toiawase.css">
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
  <div class="nav">
    <ul id="nav">
    <li><a id="navnav" href="index.php">Home</a></li>
    <li><a id="navnav" href="seisaku.php" method="post">Galleries</a></li>
    <li><a id="navnav" href="game.php">Game</a></li>
    <li><a id="navnav" href="toiawase.php">Contact</a></li>
  </ul>
  </div>

  <div class="container">
    <div class="main">
      <div class="mainmain">
        <div class="mainhello">Contact</div>
        <div class="main_container">
        <img src="ryosukeizawa2.png" alt="">
          <!-- 以下、問い合わせフォーム -->
          <!-- <form action="toiawase2.php" method="post"> -->
          <form action="toiawase2.php" method="post">
            <!-- 他ページへの移動・POST -->
          Name
          <div><input type="text" name="namae"></div>
          Company Name
          <div><input type="text" name="kaisya"></div>
          Tel
          <div><input type="text" name="denwa"></div>
          Mail
          <div><input type="text" name="mail"></div>
          Mail(comfirm)
          <div><input type="text" name="mail2"></div>
          Messages
          <div><textarea id="messages" name="messages"></textarea></div>
          <input type="submit" value="Send">
          </form>
          
        </div>
      </div>
      </div>
    <!-- サイド -->
    <div class="side">
        <div class="sidecontent">
          <div class="sidecontenth1">Recommend</div>
          <ul>
            <li><a href="http://catmocha.jp/?gclid=Cj0KCQiAtOjyBRC0ARIsAIpJyGOcR7CsSZlqVUp_aj9Oa0f6GDT3M9Vv8oHMcOzJNi09rvx8Dxq2NCUaAsu1EALw_wcB">cafe</a></li>
            <li><a href="#">book</a></li>
            <li><a href="#">movie</a></li>
            <li><a href="#">i bought it</a></li>
            <li><a href="#">local</a></li>
            <li><a href="#">cafe</a></li>
            <li><a href="#">service</a></li>
          </ul>
        </div>
      </div>
  </div>

  

  <footer>
    <img src="ryosukeizawa2.png" alt="">
    <p>Copyright © 2020-2021 Ethan All Rights Reserved.<br>Thanks for Visiting My Page</p>
  </footer>

 </div>

  
</body>
</html>