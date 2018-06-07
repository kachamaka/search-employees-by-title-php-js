<?php
  include($_SERVER['DOCUMENT_ROOT']."/php+js/db/db.php");
  $sql = "select distinct(title) from employees";
  $ret = pg_query($db, $sql);
  if(!$ret) {
    echo pg_last_error($db);
    die();
  }
  $titles = array();
  while($row = pg_fetch_row($ret)){
    array_push($titles, $row[0]);
  }
  pg_close($db);    
?>