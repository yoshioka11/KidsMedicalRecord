<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>ログインページ(先生用)</title>	
	<link rel="stylesheet" href="rogin.css">	
	</head>
	<body>
		<h1>ログインページ</h1>

		<!-- ページの連携 -->
		<form action="login_check.php" method="post">
		<!-- idの入力フォーム -->
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ID : 
		<input type="text" name="id" value=""></br></br>
<<<<<<< HEAD
		<!-- 先生の名前の入力フォーム -->
		<input type="password" name="pass" value=""></br>
		<!-- 送信ボタン -->
		<a href="login_check.php"><input type="submit" value="送信"></a>

		<?php
		echo $_POST['id'];
		echo $_POST['pass'];
		?>


=======
		<!-- 先生のパスワードの入力フォーム -->
		Password : 
		<input type="text" name="pass" value=""></br>
		<!-- 送信ボタン -->
		<input id="submit" type="submit" value="送信">
>>>>>>> 29d0dddd1923319f0bb8b824ba0b20f1867ad422
	</form>
	</body>
</html>
