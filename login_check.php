<?php
		try{
			$id=$_POST['id'];
			$pass=$_POST['pass'];
			
			
			
			//データベース接続
			$dsn = 'mysql:dbname=KidsMedicalRecord;host=localhost'; 
			$user= 'root';
			$password ='root';
			$dbh = new PDO($dsn,$user,$password);
			$dbh->query('SET NAMES utf8');
		
			//SQL分　ログイン時のユーザとの照合。
			$sql = 'SELECT * FROM teacher_db WHERE id=? AND pass=?';
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
				$_SESSION['id']=$rec['id'];
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
	if(!isset($_SESSION['id'])){
		print $msg;
	}


?>
</body>
</html>

