<?php
  include($_SERVER['DOCUMENT_ROOT']."/php+js/php/Employee.php");
  $host        = "host = localhost";
  $port        = "port = 5432";
  $dbname      = "dbname = postgres";
  $credentials = "user = postgres password=postgres";
  $db = pg_connect("$host $port $dbname $credentials");
  if(!$db) {
    echo "Error : Unable to open database\n";
    die();
  }
?>