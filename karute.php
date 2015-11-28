<?php
	session_start();
	$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Kidsカルテ</title>
	<link rel="stylesheet" href="karute.css">
</head>
<body>
<?php
	try{
        //データベースに接続する文
        $dsn = 'mysql:dbname=kidsMedicalRecord;host=localhost';
        $user = 'root';
        $password = 'root';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->query('SET NAMES utf8');
        
        //ここからsql文
		$sql = 'SELECT * FROM kids_db';
		$stmt = $dbh->prepare($sql);
		$stmt->execute();

        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<h1>こどもカルテ</h1>
<table border="1">
	<tr>
	<th>名前</th>
	<td><?php print $rec['kids_name']; ?></td>
	</tr>
	<tr>
	<th>保護者名</th>
	<td><?php print $rec['kids_parent']; ?></td>
	</tr>
	<tr>
	<th>性別</th>
	<td><?php print $rec['kids_sex']; ?></td>
	</tr>
	<tr>
	<th>誕生日</th>
	<td><?php print $rec['kids_birthday']; ?></td>
	</tr>
	<tr>
	<th>アレルギーのあるもの</th>
	<td><?php print $rec['kids_allergy']; ?></td>
	</tr>
	<tr>
	<th>持病</th>
	<td><?php print $rec['kids_disease']; ?></td>
	</tr>
	<tr>
	<th>性格や特徴など</th>
	<td><?php print $rec['kids_character']; ?></td>
	</tr>	
	<tr>
	<th>好きなもの</th>
	<td><?php print $rec['kids_like']; ?></td>
	</tr>
	<tr>
	<th>嫌いなもの</th>
	<td><?php print $rec['kids_dislike']; ?></td>
	</tr>
	<tr>
	<th>その他伝えておきたいこと</th>
	<td><?php print $rec['kids_other']; ?></td>
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