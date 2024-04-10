<!DOCTYPE html>
<html>
<body>

<?php
//echo readfile("webdictionary.txt");
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
		echo fgets($myfile);
		fclose($myfile);
?>

</body>
</html>