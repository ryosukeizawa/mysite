<!-- 問い合わせデータをデータベースに送信 -->
<?php

$namae=htmlspecialchars($_POST["namae"], ENT_QUOTES);
$kaisya=htmlspecialchars($_POST["kaisya"], ENT_QUOTES);
$denwa=htmlspecialchars($_POST["denwa"], ENT_QUOTES);
$mail=htmlspecialchars($_POST["mail"], ENT_QUOTES);
$mail2=htmlspecialchars($_POST["mail2"], ENT_QUOTES);
$messages=htmlspecialchars($_POST["messages"], ENT_QUOTES);

$db = new PDO("mysql:host=localhost;dbname=myportfolio","root","root");
$db->query("INSERT INTO tb (namae,kaisya,denwa,mail,mail2,messages,zikan)            VALUES ('$namae','$kaisya','$denwa','$mail','$mail2','$messages',NOW())");

print "送信が完了しました！！";
print "<p><a href='toiawase.php'>戻る</p>";
?>