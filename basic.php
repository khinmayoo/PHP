<?php
echo "Hello World!";
$var = "testing";
$num = 1;
$is_birthday = true;
$arr = [];
$user = [
    "name" => "mg mg",
    "email" => "test@example.com"
];

if (true) {

} else {

}

if ($var == 5) {

} elseif ($var < 5) {

} elseif ($var > 5) {

} else {

}

switch ($var) {
    case 1:
        echo "it's one";
        break;
    default:
        echo "something else";
}

function print_string($str)
{
    echo $str;
}

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die(0);
}

foreach ($user as $key => $u) {
    echo "</br>";
    echo $key;
    echo $u;
}

$fruits = [
    "apple",
    "orange",
    "grape"
];
for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i];
}

//dd($arr_assoc);
?>
<html>

<body>
    <? dd("testing") ?>
    <?= $var ?>
</body>

</html>