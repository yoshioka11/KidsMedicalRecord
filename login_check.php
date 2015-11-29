<?php
	try{
		$id=$_POST['t_id'];
		$pass=$_POST['t_pass'];
		
		
		
		//データベース接続
		$dsn = 'mysql:dbname=kids_mr;host=localhost'; 
		$user= 'root';
		$password ='root';
		$dbh = new PDO($dsn,$user,$password);
		$dbh->query('SET NAMES utf8');
	
		//SQL分　ログイン時のユーザとの照合。
		$sql = 'SELECT * FROM teachers WHERE t_id=? AND t_pass=?';
		$stmt = $dbh->prepare($sql);
		// userid
		$data[]= $id;
		//password
		$data[]= $pass;
		$stmt->execute($data);
		
		$dbh = null;
		
		$rec = $stmt->fetch(PDO::FETCH_ASSOC);
		//ユーザーidかパスワードがあってるかどうか。
		if($rec==false){
			$msg = 'UserIDかPasswordが間違っています。<br/>';
		}else{
			session_start();
			$_SESSION['t_id']=$rec['t_id'];
			header('Location:teacher_page.php');
		}
	} catch (Exception $ex) {
		print 'ただいま障害により大変ご迷惑をお掛けしております。';
		exit();
	}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
	if(!isset($_SESSION['t_id'])){
		print $msg;
	}


?>
</body>
</html>

