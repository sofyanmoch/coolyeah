<?php
$transport = array('foot', 'bike', 'car', 'plane');
echo "<pre>";
print_r($transport);
echo "</pre>";

$mode = current($transport);
echo $mode . "<br>"; // $mode = 'foot'

$mode = next($transport);
echo $mode . "<br>"; // $mode = 'bike'

$mode = current($transport);
echo $mode . "<br>"; // $mode = 'bike'

$mode = prev($transport);
echo $mode . "<br>"; // $mode = 'foot'

$mode = end($transport);
echo $mode . "<br>"; // $mode = 'plane'

$mode = current($transport);
echo $mode . "<br>"; // $mode = 'plane'
?>