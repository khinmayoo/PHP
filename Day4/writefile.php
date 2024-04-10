<?php
// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "Apple\n";
// fwrite($myfile, $txt);
// $txt = "Orange\n";
// fwrite($myfile, $txt);
// fclose($myfile);

// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// 		$txt = "Mickey Mouse\n";
// 		fwrite($myfile, $txt);
// 		$txt = "Minnie Mouse\n";
// 		fwrite($myfile, $txt);
// 		fclose($myfile);


$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
			$txt = "HTML&CSS\n";
			fwrite($myfile, $txt);
			$txt = "PHP\n";
			fwrite($myfile, $txt);
			fclose($myfile);
?>