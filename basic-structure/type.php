<?php
$nim  = "22205037";
$name = "Mochamad Sofyan";
$age = 23;
$nilai = 82.25;
$status = TRUE;

echo "NIM : " .$nim . "<br>";
echo "Name : " .$name . "<br>";
print "Age : " .$age; print "<br>"; 
printf("Nilai : %.3f<br>", $nilai);
if ($status)
    echo "Status : Active";
else
    echo "Status : Not Active";
?>