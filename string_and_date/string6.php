<?php
$str = "<b><u>Everything I do, I do it for you</u></b>";
echo $str."<br>";
//no tag html
echo strip_tags ($str). "<br>";
//allow tag <u>
echo strip_tags ($str,"<u>")."<br>";
//tampil apa adanya
echo htmlspecialchars ($str)."<br>";
//tampil apa adanya
echo htmlentities ($str);
?>