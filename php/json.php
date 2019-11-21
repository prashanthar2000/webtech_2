 <?php 
// $filename = "text.txt";
// function check($filename){
//     if(file_exists($filename))
//     {
//         echo "exists ";

//     }
//     else 
//     {
//         echo "not found";
//     }
// }
// check($filename);
// $fp = fopen("test.txt","w+");
// check($filename);
// fwrite($fp,"adithya nodale");
// echo fread($fp,10); -->

$str = file_get_contents('../json/final.json');
$json = json_decode($str,true);
// echo '<pre>' . print_r($json, true) . '</pre>';
// echo $json[0];
$car_brand = $_GET["x"];
$car_name = $_GET["y"];//echo $obj;
// echo $json[$car_brand][$car_name];
// $myJSON = json_encode($json[$car_brand]);
// $obj = json_decode($_GET["x"], false); 
// echo $obj;
// echo $myJSON;
// echo $car_brand;
// $car_brand = (string)$car_brand;
// $car_brand ="dc";
echo json_encode($json[$car_brand][$car_name]);
// echo "hello"; 
// foreach($json as $car_brand => $sep )
// {
//         echo $car_brand.":". $sep ."<br>" ;

        // foreach($row as $key => $val)
        // {
        //     echo $key ;
        //     echo "</br>";  
        // }
// }

?>