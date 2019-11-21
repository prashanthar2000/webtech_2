<?php
$str = file_get_contents('../json/final.json');
$json = json_decode($str,true);

$car_brand = $_GET["x"];
// if($_GET["y"])
// {
//     $car_name = $_GET["y"];

// };
// $arr = array();
// $car_brand ="dc" ;
// $json = array($str);
// echo $json ;
// $json = array_keys($json);
// echo $json; 
echo "<option value='select'>select a varients</option>";
// foreach($json[$car_brand] as $car_name => $val ){
//     array_push($arr, $car_name);
//     echo $car_name ;

// }
$main = $json[$car_brand];
foreach($main as $key => $value)
{
    $format = '<option value="%s">%s</option>';
    echo sprintf($format , $key,ucfirst($key));
}
// echo json_encode($arr);







?> 