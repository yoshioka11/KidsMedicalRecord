<?php
		session_start();
		$t_id = $_SESSION['t_id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>カルテ一覧</title>
  <link rel="stylesheet" href="teacher_page3.css">
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
      ?>
      <h2>カルテ一覧</h2>
      <?php    
            while(true){
              $rec = $stmt->fetch(PDO::FETCH_ASSOC); //stmtから１レコード取り出している
              if($rec==false){  //データがなければbreakで脱出
                  break;
              }else if($t_id == $rec['t_id']){
                print "<a href=\"karute.php\" onclick=\"fchange()\">{$rec['k_name']}</a> さん";
                $_SESSION['k_id'] = $rec['k_id'];
              }
      }
    }catch (Exception $ex){
        print 'ただいま障害により大変ご迷惑をおかけしております';
        exit();
    }
?>

</form>
<script type="text/javascript">
function fchange(){
  top.location.href="karute.php";
}
</script>
</body>
</html>