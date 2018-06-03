<?php
include '../db/db.php';
$sql = "select title from employees";
$ret = pg_query($db, $sql);
if(!$ret) {
  echo pg_last_error($db);
  die();
}
$allTitles = array();
while($row = pg_fetch_row($ret)){
  array_push($allTitles, $row[0]);
}
$titles = array();
foreach($allTitles as $singleTitle){
  if(!in_array($singleTitle, $titles)){
    array_push($titles, $singleTitle);
  }
}
?>