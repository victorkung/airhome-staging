<?php
$contents = base64_decode($_POST["data"]);
$myfile = fopen("pdf/Airhome_Configuration.pdf", "w") or die("Unable to open file!");
$txt = $contents;
fwrite($myfile, $txt);
fclose($myfile);
?>