<?php
$myfile = fopen("WTEXAM.txt", "w") or die("Unable to open file!");
$txt = "Luffy\n";
fwrite($myfile, $txt);
$txt = "Luffy\n";
fwrite($myfile, $txt);
fclose($myfile);
?>