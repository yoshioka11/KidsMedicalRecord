<?php
header ("HTTP/1.1 404");
header("Content-Type: application/json; charset=utf-8");
 if($_SERVER['REQUEST_METHOD'] == "GET"){
     $data_name = $_SERVER['PATH_INFO'];
     $datas = explode("/",$data_name);
     // var_dump($data_name[1]);
     // //findbyの中身
     // print $datas[1]."</br>";
     // //findbyの何を探すか
     // print $datas[2]."</br>";
     
         
        $dsn = 'mysql:dbname=KidsMedicalRecord;host=localhost';
        $user = 'root';
        $password = 'root';
        $dbh = new PDO($dsn,$user,$password);
        $dbh->query('SET NAMES utf8');
        
        //ここからSQL文を書く。
    $sql = 'SELECT * FROM kids_db';
          $stmt = $dbh->prepare($sql);
          $stmt->execute();
          
          $dbh= null;
        
          while(true){
              $rec = $stmt->fetch(PDO::FETCH_ASSOC); //stmtから１レコード取り出している
                 
              if($rec==false){  //データがなければbreakで脱出
                  break;
              }
              $check = $rec['kids_id'];
              if($check == $datas[1]){
                  // print "成功";
              $orders = $rec;
              $orders = json_encode($orders,JSON_UNESCAPED_UNICODE);
              var_dump($orders);
              }else{
                  
              }
              
         }
}             
              ?>