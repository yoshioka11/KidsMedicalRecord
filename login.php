<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>ログインページ(先生用)</title>	
	<link rel="stylesheet" href="login.css">	
	</head>
	<body>
		<h1>ログインページ</h1>

		<!-- ページの連携 -->
		<form action="login_check.php" method="post">
		<!-- idの入力フォーム -->
		ID : 
		<input type="text" name="id" value=""></br></br>
		Password : 
		<input type="password" name="pass" value=""></br>
		<!-- 送信ボタン -->
		<input id="submit" type="submit" value="送信">
	</form>
	</body>
</html>
