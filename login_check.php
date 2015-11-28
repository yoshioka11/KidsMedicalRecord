<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>


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
				print 'UserIDかPasswordが間違っています。<br/>';
			}else{
			echo 'aaa';
					session_start();
				$_SESSION['login']=1;
				$_SESSION['id']=$rec['id'];
                                header('Location:teacher_page.php');
			}
		
		} catch (Exception $ex) {
			print'ただいま障害により大変ご迷惑をお掛けしております。';
			exit();
		}
?>
</body>
</html>