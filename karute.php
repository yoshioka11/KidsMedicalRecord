<<<<<<< HEAD
せいこー
=======
<?php
	session_start();
	$id = $_SESSION['t_id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>kidsカルテ</title>
	<link rel="stylesheet" href="karute.css">
</head>
<body>
<?php
	try{
        //データベースに接続する文
        $dsn = 'mysql:dbname=kids_mr;host=localhost';
        $user = 'root';
        $password = 'root';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->query('SET NAMES utf8');
        
        //ここからsql文
		$sql = 'SELECT * FROM kids';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<h1>こどもカルテ</h1>
<table border="1">
	<tr>
	<th>名前</th>
	<td><?php print $rec['k_name']; ?></td>
	</tr>
	<tr>
	<th>保護者名</th>
	<td><?php print $rec['k_parent']; ?></td>
	</tr>
	<tr>
	<th>性別</th>
	<td><?php print $rec['k_sex']; ?></td>
	</tr>
	<tr>
	<th>誕生日</th>
	<td><?php print $rec['k_birthday']; ?></td>
	</tr>
	<tr>
	<th>アレルギーのあるもの</th>
	<td><?php print $rec['k_allergy']; ?></td>
	</tr>
	<tr>
	<th>持病</th>
	<td><?php print $rec['k_disease']; ?></td>
	</tr>
	<tr>
	<th>性格や特徴など</th>
	<td><?php print $rec['k_character']; ?></td>
	</tr>	
	<tr>
	<th>好きなもの</th>
	<td><?php print $rec['k_like']; ?></td>
	</tr>
	<tr>
	<th>嫌いなもの</th>
	<td><?php print $rec['k_dislike']; ?></td>
	</tr>
	<tr>
	<th>その他伝えておきたいこと</th>
	<td><?php print $rec['k_other']; ?></td>
	</tr>
</table>
		

<?php

		$dbh = null;

		}catch (Exception $ex){
        
        print 'ただいま障害により大変ご迷惑をおかけしております';
        exit();
	     
    }
?>
</body>
</html>
>>>>>>> 27ced5d6e75f995080581ac6e69873827ddb80e1
