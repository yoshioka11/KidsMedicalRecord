<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>ログインページ(先生用)</title>		
	</head>
	<body>
		<h1>ログインページ</h1>

		<!-- ページの連携 -->
		<form action="login_check.php" method="post">
		<!-- idの入力フォーム -->
		<input type="text" name="id" value=""></br></br>
		<!-- 先生の名前の入力フォーム -->
		<input type="password" name="pass" value=""></br>
		<!-- 送信ボタン -->
		<a href="login_check.php"><input type="submit" value="送信"></a>

		<?php
		echo $_POST['id'];
		echo $_POST['pass'];
		?>


	</form>
	</body>
</html>
