<?php
   $data = new stdClass();
   $myJSON = new stdClass();

   $dbhost = 'mysql.server269.com:3306';
   $dbuser = 'hello';
   $dbpass = 'phuubohngaipaip';
   $dbname = 'mikeshecket_HELLOWORLD';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $sql = "select * from messages";
   $result = $conn->query($sql);
   
   mysqli_close($conn);


  $data->message = mysqli_fetch_array($result)[0];
  $myJSON = json_encode($data);
  echo $myJSON;
?>
