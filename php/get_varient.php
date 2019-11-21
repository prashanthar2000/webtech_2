<?php
$str = file_get_contents('../json/final.json');
$json = json_decode($str,true);

$car_brand = $_GET["x"];
// $car_brand = "dc";
echo "<ul>";
$main = $json[$car_brand];
foreach($main as $key => $value)
{
    $format = '<li><a onclick="display_new(this)"><span class="brand-type-title">%s</span></a></li>';
    echo sprintf($format , $key);
}
echo "</ul>";
?>
