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
		<form action="teacher_page.php" method="post">
		<!-- idの入力フォーム -->
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ID : 
		<input type="text" name="id" value=""></br></br>
		<!-- 先生のパスワードの入力フォーム -->
		Password : 
		<input type="text" name="pass" value=""></br>
		<!-- 送信ボタン -->
		<input id="submit" type="submit" value="送信">
	</form>
	</body>
</html>
