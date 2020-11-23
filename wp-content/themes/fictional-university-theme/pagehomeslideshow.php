<?php 

$names = array('Brad', 'Jim', 'Jane', 'Mark');

$count = 0;

while($count < count($names)) {
  echo "<li>My name is $names[$count]</li>";
  $count++;
}

?>