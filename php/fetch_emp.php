<?php
  include '../db/db.php';
  $sql = "select * from employees";
  $ret = pg_query($db, $sql);
  if(!$ret) {
    echo pg_last_error($db);
    die();
  }
  $employees = array();
  while($row = pg_fetch_row($ret)){
    $emp = new Employee($row[0], $row[1], $row[2], $row[3], $row[4], $row[5]);
    array_push($employees, $emp);
  }
  $stdClass = new stdClass();
  $stdClass->employees = $employees;
  $json = json_encode($stdClass);
  echo $json;
?>