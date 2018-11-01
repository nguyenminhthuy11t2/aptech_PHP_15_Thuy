<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

fwrite($myfile,"t\n");
fclose($myfile);
echo readfile("newfile.txt");