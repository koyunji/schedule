<?php
  $url = $_SERVER["DOCUMENT_ROOT"]."/schedule/data/sp_table.json";
  //echo $url;

  $json_string = file_get_contents($url);
  echo $json_string;

  //localhost/schedule/php/read_json.php
?>