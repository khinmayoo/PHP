<!-- <?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "<br/>";
?>

<!DOCTYPE html>
    <html>
    <body>
        &copy; 2010-<?php echo date("Y"); ?>
    </body>
    </html> -->

<!-- <!DOCTYPE html>
<html>
<body>

<?php
echo "The time is " . date("h:i:sa") . "<br/>";
?>

<?php
date_default_timezone_set("Asia/Yangon");
echo "The time is " . date("h:i:sa");
?>

</body>
</html>     -->


<?php
// $startDate = strtotime("Saturday");
// $endDate = strtotime("+6 weeks", $startdate);

// while ($startDate < $endDate) {
// 	echo date("M d", $startDate) . "<br>";
// 	$startDate = strtotime("+1 week", $startDate);
// }

$d1 = strtotime("July 04");
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);
echo "There are " . $d2 . " days until 4th of July.";

echo(ceil(0.60) . "<br>");
echo(ceil(0.40) . "<br>");
echo(ceil(5) . "<br>");
echo(ceil(5.1) . "<br>");
echo(ceil(-5.1) . "<br>");
echo(ceil(-5.9));
?>