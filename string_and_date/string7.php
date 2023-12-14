<?php
$number = 1234.56;
// english notation (default)
$english_format_number = number_format($number);
echo "<br>".$english_format_number; // 1,235
// French notation
$nombre_format_francais = number_format($number, 2, ',', ' ');
echo "<br>".$nombre_format_francais; // 1 234,56//indonesian notation
$format_indonesia = number_format ($number, 2, ',', '.');
echo "<br>".$format_indonesia; //1.234,56
$number = 1234.5678;
// english notation without thousands seperator
$english_format_number = number_format($number, 2, '.', '');
echo "<br>". $english_format_number; // 1234.57
?>