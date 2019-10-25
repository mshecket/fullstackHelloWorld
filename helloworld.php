<?php
  $data = new stdClass();
  $myJSON = new stdClass();
  $data->message = "Hello world!";
  $myJSON = json_encode($data);
  echo $myJSON;
?>
