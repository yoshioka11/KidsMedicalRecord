<?php
		session_start();
		$id = $_SESSION['t_id']
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
    $dsn = 'mysql:dbname=kids_mr;host=localhost';
    $user = 'root';
    $password = 'root';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');

    //ここからsql文
      $sql = 'SELECT * FROM kids';
      $stmt = $dbh->prepare($sql);
      $stmt->execute();
      
      $dbh= null;

      print '<CENTER>カルテ一覧</CENTER></br></br>';
      
      while(true){
        $rec = $stmt->fetch(PDO::FETCH_ASSOC); //stmtから１レコード取り出している
        if($rec==false){  //データがなければbreakで脱出
            break;
        }else if($id == $rec['t_id']){
          print "<a href=\"karute.php\" onclick=\"fchange()\">{$rec['k_name']}</a> さん";
        }
      }
    }catch (Exception $ex){
        print 'ただいま障害により大変ご迷惑をおかけしております';
        exit();
    }
?>
<script type="text/javascript">
function fchange(){
  top.location.href="karute.php";
}
</script>
</body>
</html>