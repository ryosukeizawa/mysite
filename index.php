<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
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
        <div class="mainhello">please touch me!!</div>
        <div class="main_container">
          <img src="ryosukeizawa2.png" alt="">
          <!-- モーダルウィンドウ -->
          <ul>
            <!-- 工程 -->
          <li><div id ="open">Process</div></li>
          <div id="mask" class="hidden"></div>
          <section id="modal" class="hidden">
            <p>Sorry! I've not experienced</p>
            <div id="close">CLOSE</div>
          </section>
          <!-- 言語 -->
          <li><div id ="open2">Languages</div></li>
          <div id="mask2" class="hidden"></div>
          <section id="modal2" class="hidden">
            <p>HTML・CSS・JavaScript・PHP・jQuery</p>
            <div id="close2">CLOSE</div>
          </section>
          <!-- OSー -->
          <li><div id ="open3">Operating System</div></li>
          <div id="mask3" class="hidden"></div>
          <section id="modal3" class="hidden">
            <p>macOS・windows</p>
            <div id="close3">CLOSE</div>
          </section>
          <!-- データベース -->
          <li><div id ="open4">DateBase</div></li>
          <div id="mask4" class="hidden"></div>
          <section id="modal4" class="hidden">
            <p>MySQL</p>
            <div id="close4">CLOSE</div>
          </section>
          <!-- テキストエディタ・ツール -->
          <li><div id ="open5">Tools</div></li>
          <div id="mask5" class="hidden"></div>
          <section id="modal5" class="hidden">
            <p>VS code・MAMP</p>
            <div id="close5">CLOSE</div>
          </section>
          <!-- 資格 -->
          <li><div id ="open6">qualified/job knowledge</div></li>
          <div id="mask6" class="hidden"></div>
          <section id="modal6" class="hidden">
            <p>Financial Planner Glade2・HSK level4(Chinese)</p>
            <div id="close6">CLOSE</div>
          </section>
    
          </ul>
        </div>
      </div>
      </div>
      <!-- サイド -->
    <div class="side">
        <div class="sidecontent">
          <div class="sidecontenth1">Recommend</div>
          <ul>
            <li><a href="#">Flame (HTML)</a></li>
            <li><a href="http://catmocha.jp/?gclid=Cj0KCQiAtOjyBRC0ARIsAIpJyGOcR7CsSZlqVUp_aj9Oa0f6GDT3M9Vv8oHMcOzJNi09rvx8Dxq2NCUaAsu1EALw_wcB">Cat CAFF</a></li>
            <li><a href="#">MOVIES</a></li>
            <li><a href="#">I bought these..</a></li>
            <li><a href="#">My local</a></li>
            <li><a href="#">Good CAFF</a></li>
            <li><a href="#">My Service</a></li>
          </ul>
        </div>
      </div>
  </div>

  <footer>
    <img src="ryosukeizawa2.png" alt="">
    <p>Copyright © 2020-2021 Ethan All Rights Reserved.<br>Thanks for Visiting My Page</p>
  </footer>

 </div>

<!-- javascript -->
<script src="main.js"></script>
</body>
</html>