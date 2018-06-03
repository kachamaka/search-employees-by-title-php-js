<?php
echo '<h2>Search employees by title</h2>';
echo '<select onchange="search()" id="title" name="title">';
echo '<option selected disabled hidden>Choose title</option>';
foreach($titles as $title){
  echo "<option value=\"$title\">$title</option>";
}
echo '</select>';
?>