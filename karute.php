<?php
	session_start();
	$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Kidsカルテ</title>
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
<table border="1">
	<tr>
	<th>kids_id</th>
	<td><?php print $rec['kids_id']; ?></td>
	</tr>
	<tr>
	<th>kids_pass</th>
	<td><?php print $rec['kids_pass']; ?></td>
	</tr>
	<tr>
	<th>kids_parent</th>
	<td><?php print $rec['kids_parent']; ?></td>
	</tr>
	<tr>
	<th>kids_name</th>
	<td><?php print $rec['kids_name']; ?></td>
	</tr>
	<tr>
	<th>kids_sex</th>
	<td><?php print $rec['kids_sex']; ?></td>
	</tr>
	<tr>
	<th>kids_birthday</th>
	<td><?php print $rec['kids_birthday']; ?></td>
	</tr>
	<tr>
	<th>id</th>
	<td><?php print $rec['id']; ?></td>
	</tr>
	<tr>
	<th>kids_allergy</th>
	<td><?php print $rec['kids_allergy']; ?></td>
	</tr>
	<tr>
	<th>kids_disease</th>
	<td><?php print $rec['kids_disease']; ?></td>
	</tr>
	<tr>
	<th>kids_character</th>
	<td><?php print $rec['kids_character']; ?></td>
	</tr>
	<tr>
	<th>kids_other</th>
	<td><?php print $rec['kids_other']; ?></td>
	</tr>
	<tr>
	<th>kids_like</th>
	<td><?php print $rec['kids_like']; ?></td>
	</tr>
	<tr>
	<th>kids_dislike</th>
	<td><?php print $rec['kids_dislike']; ?></td>
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