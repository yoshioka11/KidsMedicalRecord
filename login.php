<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>ログインページ(先生用)</title>	
	<link rel="stylesheet" href="login.css">	
	</head>
	<body>
		<!-- <h1>ログインページ（先生用）</h1> -->
		<img id="img" src="image/title.png">

		<!-- ページの連携 -->
		<form action="login_check.php" method="post">
		<!-- idの入力フォーム -->
		<input type="text" placeholder="User ID" name="t_id" value="">&nbsp;
		<!-- パスワードの入力フォーム -->
		<input type="password" placeholder="Password" name="t_pass" value=""></br>
		<!-- 送信ボタン -->
		<input id="submit" type="submit" value="Sign in">
	</form>
	</body>
</html>
