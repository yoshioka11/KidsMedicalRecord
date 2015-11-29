<?php
 if($_SERVER['REQUEST_METHOD'] == "GET"){
     $test = $_SERVER['PATH_INFO'];
     $test = explode("/",$test);
     print $test[1];
     print $test[2];
     print $test[3];

  
     
     try{
     
     $dsn = 'mysql:dbname=KidsMedicalRecord;host=localhost';
        $user = 'root';
        $password = 'root';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->query('SET NAMES utf8');
        //ここからSQL文を書く。
      $sql = 'UPDATE kids_db SET kids_name=?,kids_like=?,kids_dislike=? WHERE kids_id=?';
      $stmt = $dbh->prepare($sql);
      // userid
      $data[]= $test[2];
      $data[]= $test[3];
      $data[]= $test[4];
      //password
      $data[]= $test[1];

      
      $stmt->execute($data);
      
      $dbh = null;
    
    
              
  } catch (Exception $ex) {
    print "失敗";
    
 }
}
 ?>