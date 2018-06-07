<h2>Search employees by title</h2>
<select onchange="search()" id="title" name="title">
<option selected disabled hidden>Choose title</option>
<?php
include 'titles.php';
foreach($titles as $title){
  echo "<option value=\"$title\">$title</option>";
}
?>
</select>